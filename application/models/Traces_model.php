<?php

class Traces_model extends CI_Model {

    // CRUD
    protected $table;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "traces";
    }

    /**
     * fonction d'ajout des traces
     *
     * @param mixed $array
     * $array= [
     *      lib_trace =>""
     *      url_page  =>""
     *      page_title =>""
     *      lib_action =>""
     *      descr_action =>""
     *      email_user   =>""
     * ]
     * 
     * @return object
     * 
     */
    public function add_trace($array){

        $this->db->set('lib_trace',$array['lib_trace']);
        $this->db->set('url_page',$array['url_page']);
        $this->db->set('page_title',$array['page_title']);
        $this->db->set('lib_action',$array['lib_action']);
        $this->db->set('descr_action',$array['descr_action']);
        $this->db->set('email_user',$array['email_user']);
        $this->db->set('created_at',date("Y-m-d H:i:s"));
        // $this->db->set('terminal',$array['terminal']);
        // $this->db->set('var',$array['var']);
        
        return $this->db->insert($this->table);
    }

    
    public function add_trace_new($trace_action, $trace_complement)
	{	
        $users_id = $this->session->userdata('users_id');
		$adresse_ip = $this->recuperer_ip();
		
        return $this->db->set('trace_date', date("Y-m-d H:i:s"))
					    ->set('trace_adresse_ip', $adresse_ip)
					    ->set('trace_action', $trace_action)
					    ->set('trace_sources', 'connexion-ci3')
					    ->set('trace_complement', $trace_complement)
					    ->set('id_users', $users_id)
						->insert($this->table_trace);

	}
    
    // fonction de recherche de traces
    public function search_trace($etat,$date_debut,$date_fin){
        
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('etat', $etat);
        $this->db->where('created_at >=', $date_debut);
        $this->db->where('created_at <=', $date_fin);


        $query = $this->db->get();

        return $query->result();
    }

    // fonction de mise a jour propriete [etat]
    public function update_state($id,$etat){
        $this->db->set('etat',$etat);
        $this->db->where('id',$id);

        return $this->db->update($this->table);
    }

}