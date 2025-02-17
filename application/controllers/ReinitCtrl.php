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

class ReinitCtrl extends CI_Controller {

	function __construct()
	{	
		parent::__construct();
		$this->load->helper(array('form', 'url','notif','connexion'));
		$this->load->library('form_validation');
		$this->load->model('User_model','user');
		$this->load->model('Token_model','token');
	}

    // formulaire envoie de mail
    public function index()
	{   
        // envoyer lien de reinitialisation par email
		$this->load->view('connexion/send_reinit_mail');
	}

	// function de validation de l'operation
	public function reinit_pass(){

		// recuperation des infos utilisateur
		// recuperation email
        $login = $this->input->post('login');
		// recuperation nouveau mot de passe
        $pass = $this->input->post('password');
		// recherche de l'utilisateur et mise a jour du mot de passe en BD
		// si la transaction se passe bien 
        $update_response = $this->user->update_password($login,$pass);

        // if (TRUE) {
        if ($update_response != TRUE) {
            // rediriger vers la page de reinitialisation 
            // avec un message d'erreur
            $this->session->set_flashdata('msg',"Une erreur est survenue, veuillez reessayer");

            redirect('ReinitCtrl/');

        } else {
            // 	rediriger vers la page de connexion avec un message de succes
            $this->session->set_flashdata('msg',"Succès réinitialisation");

            redirect('ConnexionCtrl/');
        }

        // afficher la page d'erreur
		redirect(404);

        
	}


	// formulaire de reinitialisation du mot de passe
	public function reinit_form($token){

		// recuperation de la reponse de verification du token utilisé
		$verify_token_response = $this->token->verify_token($token);
		// verification de la date d'expiration du token
		$check_token_date_exp = $this->token->check_exp_date($token);

		// condition d'existence du token
		$condition_token_existe = $verify_token_response != FALSE;
		// condition verification date d'expiration du token
		$condition_token_expire = empty($check_token_date_exp) ;

		// si les deux conditions sont verifiées
		if ($condition_token_existe AND $condition_token_expire) {
			// recuperation de l'utilisateur via le token
			$user = $this->token->get_user_by_token($token);
			
			// changer l'etat du token a utilisé
			// $change_state_response = $this->token->set_used_token($token);

			if (!empty($user)) {

				// affichage du formulaire de reinitialisation
				$this->load->view('connexion/reinitialisation',['user'=>$user[0]]);

			}else{
				// afficher la page d'erreur
				redirect(404);
			}
			
		} else {
			// Afficher la page d'erreur
			redirect(404);
		}
	}

	// enovyer mail de reinitialisation
	public function send_reinit_mail()
	{	
		// création du token
		$token = generate_token();
		// création du lien de réinitialisation
		$lien = generate_link($token);
		// récupération email utilisateur
		$email = $this->input->post('email');
		// récupération de l'utilisateur
		$user = $this->user->getUserByEmail($email);

		// si l'utilisateur existe 
		if (!empty($user)) {
			// ajout du token
			$insert_response = $this->token->add_token(['token'=>$token,'id'=>$user->id_user]);
			// mise en place du mail de reinitialisation
			$message = "Cliquez sur le lien pour réinitialiser vos accès \n ".base_url()."index.php/ReinitCtrl/".$lien;
			// envoi du mail
			$mail_response = mailjet($user->email, "Réinitialisation mot de passe", $message,"MAD Admin");
		}

		
		// else{
		// 	$this->session->set_flashdata('msg','Vérifiez votre boite e-mail');
		// }
		
		$this->session->set_flashdata('msg','Vérifiez votre boite e-mail');

		return redirect("ReinitCtrl/");
	}

    // formulaire de reinitialisation
    public function reinitialisation($token){

		// recuperation de l'utilisateur grace au token
		$user = $this->token->get_user_by_token($token);
        $this->load->view('connexion/reinitialisation',['user'=>$user[0]]);
    }

	public function send_mail(){
		// initialisation du message
		$message = $this->input->post('message');
		// initialisation du destinataire
		$destinataire = $this->input->post('email');
		//initialisation du sujet
		$sujet = $this->input->post('subject');
		// initialisation de l'API
		$response = mailjet($destinataire, $subject, $message);

		if (!empty($response)) {
			$this->session->set_flashdata('msg',"E-mail envoyé");
		} else {
			$this->session->set_flashdata('msg',"Une erreur est survenue");
		}

	}

    // fonction de validation mot de passe
    // operation validation du formulaire de connexion
	public function reinit_form_validation_request()
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