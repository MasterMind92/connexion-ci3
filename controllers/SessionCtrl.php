<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ligne d'inclusion d'un autre controller
// include_once (dirname(__FILE__) . "/controller1.php");

// Exemple d'inclusion d'un controller dans un autre 
// class Mycontroller extends Controller1 {

//     public function __construct() {
//         parent::__construct();
//     }
// }

class SessionCtrl extends CI_Controller {

	function __construct()
	{	
		parent::__construct();
		// $this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}

    /**
     * enregistrement d'une valeur en session
     *
     * @param array $array
     * 
     * @return void
     * 
     */
    public function add_value($array)
    {
        $this->session->set_userdata($array);
    }

    /**
     * verification d'une valeur en session
     *
     * @param array $array
     * 
     * @return void
     * 
     */
    public function check_value($value)
    {
        $this->session->has_userdata($value);
    }

    /**
     * suppression d'une valuer en session
     *
     * @param array $array
     * 
     * @return void
     * 
     */
    public function unset_value($value)
    {
        $this->session->unset_userdata($value);
    }

    /**
     * restitution d'une valeur en session
     *
     * @param array $array
     * 
     * @return void
     * 
     */
    
    public function get_value($item)
    {
        return $this->session->userdata($item);
    }

    /**
     * creation d'une valeur flash
     *
     * @param String $item
     * @param String $value
     * 
     * @return void
     * 
     */
    public function add_flash_value($item,$value)
    {
        $this->session->set_flashdata($item,$value);
    }

    /**
     * Ajout donnée temporaire 
     *
     * @param array $array
     * @param int $expire
     * 
     * @return void
     * 
     */
    public function add_temp_data($array,$expire)
    {
        $this->session->set_tempdata($array, NULL, $expire);
    }

    /**
     * recuperation donnees temporaire
     *
     * @param mixed $item
     * 
     * @return [type]
     * 
     */
    public function get_temp_data($item)
    {
        $this->session->tempdata($item);
    }
    
    
}