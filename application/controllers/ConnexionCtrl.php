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

class ConnexionCtrl extends CI_Controller {

	function __construct()
	{	
		parent::__construct();
		$this->load->helper(array('form', 'url','notif','connexion'));
		$this->load->library('form_validation');
		$this->load->model('User_model','user');
		$this->load->model('Token_model','token');
	}

	public function index()
	{
		
		// execution fonction de validation
		$this->login_form_validation_request();

		// si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('connexion/login');
			
		}
		// si la validation se passe bien
		else
		{	
			// var_dump($_POST);
			// demander si l'utilisateur existe
			// demander si c'est le bon login + mot de passe
			$login = $this->input->post('login');
			$mdp = $this->input->post('password');

			$user = $this->user->connect_user($login,$mdp);

			// var_dump($user==NULL,sha1($mdp));
			// si l'utilisateur est vide
			if ($user == NULL) {

				$this->session->set_flashdata('msg', 'Login ou mot de passe incorrecte');
				
				$this->load->view('connexion/login');
				
			} else {
				// verifier la date d'expiration du password utilisateur
				$exp = $this->check_date_exp($user[0]->id_user);
				// si non ok rediriger l'utilisateur vers la page de reinitialisation
				if ($exp == false) {

					// enregistrer l'utilisateur en session puis le rediriger
					// sur la page d'accueil
					$this->session->set_userdata(['user'=>$user]);
					
					redirect('userctrl/');// reinitialisation
				}

				// sinon on le renvoie a la page de connexion
				// avec message d'erreur 
				// login ou mot de passe incorrecte
				// redirection vers la page d'accueil
				// redirect('');
				
			}
			
		}
	}

	public function check_date_exp($id){
		$user = $this->user->check_date_exp($id);

		if ($user != NULL) {
			return true;
		} else {
			return false;
		}
		
		return false;

	}

	// vue de reinitialisation de l'utilisateur
	public function add_user()
	{
		$this->load->view('connexion/inscription');
	}
	
	// operation validation du formulaire de connexion
	public function login_form_validation_request()
	{
		$this->form_validation->set_rules('login', 'Login', 'required|alpha_numeric',
			array(
				'required' => 'le champ %s est obligatoire.',
				'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
			)
		);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim|alpha_numeric',
				array(
					'required' => 'le champ %s est obligatoire.',
					'min_length'=> 'le champ %s est inférieur à 8 caractères',
					'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
				)
		);

		// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
	}

	

	// public function redirect()
	// {
	// 	$this->load->view('welcome_message');
	// }


}
