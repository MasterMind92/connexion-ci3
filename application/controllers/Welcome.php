<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct()
	{	
		parent::__construct();
		$this->load->helper(array('form', 'url','notif'));
		// $this->load->library(array('form_validation','Excel'));
		// $this->load->model('User_model','user');
	}


	public function index()
	{	
		// execution de la validation du formulaire
		$this->contact_form_validation_request();
		// si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('partials/head');
			$this->load->view('modular-form/contact-form');
			$this->load->view('partials/footer');
			
		}
		// si la validation se passe bien
		else
		{	
			
			// recuperation des valeurs
			$nom = $this->input->post('nom');
			$prenoms = $this->input->post('prenoms');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$message = $this->input->post('message');

			$mail = $this->load->view('docs/mail-contact-text',"",true);
			// $mail = "mail de prise de contact";

			var_dump($mail);exit();
			// envoyer le mail
			$response = mailjet("dalomarc92@gmail.com","Prise de contact",$mail,"MAD Dev");

			// var_dump($response); exit();

			if ($response->Messages[0]->Status == "success") {
				// retour du message
				$this->session->set_flashdata('msg','Votre demande de prise de contact prise en compte avec succès');
			}else{
				$this->session->set_flashdata('msg',"Une erreur s'est produite");
			}

			// affichage de l'interface
			$this->load->view('partials/head');
			$this->load->view('modular-form/contact-form');
			$this->load->view('partials/footer');
		}
		
	}

	public function contact_form_validation_request()
	{
		$this->form_validation->set_rules('nom', 'Nom', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);

		$this->form_validation->set_rules('prenoms', 'Prenoms', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);

		$this->form_validation->set_rules('phone', 'Telephone', 'required|numeric',
			array(
				'required' => 'le champ %s est obligatoire.',
				'numeric' => 'le champ %s doit contenir que chiffres.',
			)
		);

		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email',
			array(
				'required' => 'le champ %s est obligatoire.',
				'valid_email'=> 'le champ %s doit être une adresse mail valide',
			)
		);

	}

	public function test(){
		// $this->load->view('bs3_test');
		// $files = glob('assets/*');

		$this->load->view('users/add-user-infos');
		// var_dump($files);
	}
}
