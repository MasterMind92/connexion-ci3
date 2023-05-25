<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReinitCtrl extends CI_Controller {

	function __construct()
	{	
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('Users_model','user');
	}

    // formulaire envoie de mail
    public function index()
	{   
        // envoyer lien de reinitialisation par email
		$this->load->view('send_reinit_mail');
	}

    // formulaire de reinitialisation
    public function reinitialisation(){
        $this->load->view('reinitialisation');
    }

    // penser a une fonction pour generer un lien temporaire

    // fonction de validation mot de passe
    // operation validation du formulaire de connexion
	public function login_form_validation_request()
	{
		$this->form_validation->set_rules('login', 'Login', 'required|valid_email|is_unique[users.email]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
				'valid_email'=> 'le champ %s n\'est pas une adresse mail valide',
				'is_unique'=> 'le champ %s n\'est pas une adresse mail unique',
			)
		);

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim|alpha_numeric',
				array(
					'required' => 'le champ %s est obligatoire.',
					'min_length'=> 'le champ %s est inférieur à 8 caractères',
					'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
				)
		);

        $this->form_validation->set_rules('confirm_password', 'Password', 'required|min_length[8]|trim|alpha_numeric|matches[password]',
				array(
					'required' => 'le champ %s est obligatoire.',
					'min_length'=> 'le champ %s est inférieur à 8 caractères',
					'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
					'matches'=> 'le champ %s doit être identiques au champ password',
				)
		);

		// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
	}

}