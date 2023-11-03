<?php 


class token_model extends CI_Model {

    // CRUD
    protected $table;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "token";
    }

    // fonction d'ajout de token
    public function add_token($array){

        $this->db->set('token',$array['token']);
        $this->db->set('id_user',$array['id']);
        $this->db->set('created_at',date("Y-m-d H:i:s"));
        $this->db->set('exp_date',date("Y-m-d H:i:s",strtotime("+5 minutes")));
        
        return $this->db->insert($this->table);
    }

    // fonction de verification de l'existence du token
    public function verify_token($token){

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('token',$token);

        $query = $this->db->get();

        return $query->result();
    }

    // fonction de verification de la date d'expiration du token
    public function check_exp_date($token){

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('token',$token);
        $this->db->where('exp_date <',date('Y-m-d H:i:s'));

        $query = $this->db->get();

        return $query->result();
    }

    // fonction de recuperation d'un utilisateur 
    // a partir d'un token valide
    public function get_user_by_token($token)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('users',"users.id_user = token.id_user",'left');
        $this->db->where('token.token',$token);
        $this->db->where('token.used',0);
        $this->db->where('token.exp_date >',date('Y-m-d H:i:s'));
        $this->db->where('users.etat_user','A');

        $query = $this->db->get();

        return $query->result();
    }

    // state setter
    public function set_used_token($token)
    {
        $this->db->set('used', 1);
        $this->db->where('token',$token);
        
        return $this->db->update($this->table);
    }

}