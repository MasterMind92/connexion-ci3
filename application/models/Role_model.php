<?php

class Role_model extends CI_Model {

    // CRUD
    protected $table;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "role";
    }


    
    /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function add_trace($trace_action, $trace_complement)
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

     /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function get_table_name($param){

    }


     /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function update_table_name($param){

    }

     /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function delete($param){

    }

    function recuperer_ip()
	{
		// IP si internet partagé
		if (isset($_SERVER['HTTP_CLIENT_IP']))
		{
			return $_SERVER['HTTP_CLIENT_IP'];
		}
		// IP derrière un proxy
		elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		// Sinon : IP normale
		else
		{
			return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
		}
	}

}