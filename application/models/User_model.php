<?php

class User_model extends CI_Model {

    // CRUD
    protected $table;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "users";
    }
    
    /**
     * Creer un utilisateur
     *
     * @param string $nom
     * @param string $prenoms
     * @param string $mail
     * @param string $phone
     * @param string $login
     * @param string $mdp
     * @param string $role
     * 
     * @return boolean
     * 
     */
    public function add($array)
    {   
        $this->db->set('lname', $array['lname']);
        $this->db->set('fname', $array['fname']);
        $this->db->set('email', $array['email']);
        $this->db->set('login', $array['login']);
        $this->db->set('phone', $array['tel']);
        $this->db->set('pass', sha1($array['pass']));
        $this->db->set('role', $array['role']);
        $this->db->set('etat_user   ', 'A');
        $this->db->set('created_at', date('Y-m-d h:i:s'));
        $this->db->set('updated_at', date('Y-m-d h:i:s'));

        return $this->db->insert('users');
    }


    /**
     * Modifier caractéristiques utilisateur
     *
     * @param int $id
     * @param string $etat ['A','S','I']
     * 
     * @return boolean
     * 
     */
    public function update_etat($id,$etat)
    {
        $this->db->set('etat_user', $etat);
        $this->db->where('id_user', $id);

        return $this->db->update('users');
    }

    
    /**
     * Rechercher un utilisateur
     *
     * @param mixed $date_debut
     * @param mixed $date_fin
     * 
     * @return object
     * 
     */
    public function search_users($date_debut,$date_fin)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('created_at >=',$date_debut );
        $this->db->where('created_at <=',$date_fin);

        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Lister les utilisateurs
     *
     * @return object
     * 
     */
    public function get_all_users()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('etat_user !=','S');

        $query = $this->db->get();

        return $query->result();
    }

    /**
     * Rechercher un utiliateur specifique
     *
     * @param mixed $email
     * @param mixed $pass
     * 
     * @return object
     * 
     */
    public function get_user_by_id($id)
    {   

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user',$id);
        $this->db->where('etat_user !=','S');
        $this->db->where('etat_user !=','B');
        // $this->db->where('date_exp <',date('Y-m-d H:i:s'));
        
        $query = $this->db->get();

        return $query->result();
    }


    /**
     * Rechercher un utiliateur specifique
     *
     * @param mixed $email
     * @param mixed $pass
     * 
     * @return object
     * 
     */
    public function get($email,$pass)
    {   

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $this->db->where('pass',sha1($pass));
        $this->db->where('etat_user !=','S');
        $this->db->where('etat_user !=','B');
        // $this->db->where('date_exp <',date('Y-m-d H:i:s'));
        
        $query = $this->db->get();

        return $query->result();
    }


    /**
     * Supprimer un utilisateur
     *
     * @param int $id
     * 
     * @return boolean
     * 
     */
    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->set('deleted_at', date('Y-m-d h:i:s'));
        $this->db->set('etat_user','S');

        return $this->db->update('users');
    }


    // verification des etats
    public function is_such_state($id, $etat)
    {
        $this->db->where('id_user',$id);
        $this->db->where('etat_user',$etat);
        $query = $this->db->get('users');
        
        return $query->result();
    }

    // state setter
    public function set_state($id, $etat)
    {
        $this->db->set('etat_user',$etat);
        $this->db->where('id_user',$id);
        
        return $this->db->update('users');
    }

    public function check_date_exp($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id_user',$id);
        $this->db->where('date_exp <',date('Y-m-d H:i:s'));
    }

    // role setter
    public function set_role($id, $role)
    {
        $this->db->set('etat_user',$etat);
        $this->db->where('role',$role);
        
        return $this->db->update('users');
    }

    // password setter
    public function set_password($id, $pass)
    {
        $this->db->set('id_user',$id);
        $this->db->where('role',sha1($pass));
        
        return $this->db->update('users');
    }
    
}