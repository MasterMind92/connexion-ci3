<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCtrl extends CI_Controller {

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
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('User_model','user');
	}

	public function index()
	{	
		$users = $this->user->get_users();

		// var_dump($users);

		// echo "page index utilisateur";
		$this->load->view('partials/head');
		$this->load->view('partials/admin/sidebar');
		$this->load->view('users/index',['users'=>$users]);
		$this->load->view('partials/foot');
	}

	// vue de reinitialisation de l'utilisateur
	public function add()
	{
		$this->load->view('partials/head');
		$this->load->view('partials/admin/sidebar');
		$this->load->view('users/add_users');
		$this->load->view('partials/foot');
	}

	// vue d'ajout d'un utilisateur
	public function modify($id)
	{	
		$user = $this->user->get($id);

		// var_dump($user);

		$this->user_update_validation_request();

		 // si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('partials/head');
			$this->load->view('partials/admin/sidebar');
			$this->load->view('users/show_users',['user'=>$user[0]]);
			$this->load->view('partials/foot');
		}
		// si la validation se passe bien
		else
		{	
			// var_dump($_POST);
			// demander si l'utilisateur existe
			// demander si c'est le bon login + mot de passe
			$lname = $this->input->post('nom');
			$fname = $this->input->post('prenoms');
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$login = $this->input->post('login');
			$role = $this->input->post('role');
			$etat = $this->input->post('etat');

			$update_response = $this->user->update($id,$lname,$fname,$email,$login,$pass,$role,$etat);

			if ($update_response) {

				$this->session->set_flashdata('msg', 'Infos utilisateurs mise à jour avec succès');
				
			} else {
				
				$this->session->set_flashdata('msg', ' Echec mise à jour infos utilisateurs');

			}

			$this->load->view('partials/head');
			$this->load->view('users/show_users',['user'=>$user[0]]);
			$this->load->view('partials/foot');
			
			// si c'est bon on le connecte
			// page de succes
			// $this->load->view('formsuccess');
		}

		
	}

	// operation validation du formulaire de connexion
	public function user_update_validation_request()
	{
		// lname validation
		$this->form_validation->set_rules('prenoms', 'Prenoms', 'required|min_length[3]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s doit contenir plus de 3 caractères',
			)
		);

		// fname validation
		$this->form_validation->set_rules('nom', 'Nom', 'required|min_length[3]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s doit contenir plus de 3 caractères',
			)
		);

		// email validation
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
			array(
				'required' => 'le champ %s est obligatoire.',
				'valid_email'=> 'le champ %s n\'est pas une adresse mail valide',
			)
		);

		// phone validation
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[8]|trim|numeric',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s est inférieur à 8 caractères',
				'numeric'=> 'le champ %s ne doit contenir que des chiffres',
			)
		);


		// password validation
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim|alpha_numeric',
				array(
					'required' => 'le champ %s est obligatoire.',
					'min_length'=> 'le champ %s est inférieur à 8 caractères',
					'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
				)
		);

		// password confirm validation
		$this->form_validation->set_rules('confirm_password', 'Password confirmation', 'required|min_length[8]|trim|alpha_numeric|matches[password]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'min_length'=> 'le champ %s est inférieur à 8 caractères',
				'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
				'matches'=> 'le champ %s doit doit être identiques au champ mot de passe',
			)
		);

		// etat validation
		$this->form_validation->set_rules('etat', 'Etat', 'required|max_length[1]|trim|alpha',
				array(
					'required' => 'le champ %s est obligatoire.',
					'max_length'=> 'le champ %s est inférieur à 8 caractères',
					'alpha'=> 'le champ %s doit contenir que des chiffres et des lettres',
				)
		);

		// role validation
		$this->form_validation->set_rules('role', 'Role', 'required|max_length[8]|trim|alpha_numeric',
				array(
					'required' => 'le champ %s est obligatoire.',
					'max_length'=> 'le champ %s est supérieur à 3 caractères',
					'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
				)
		);

		// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
	}

	// vue de modification d'un utilisateur
	public function show($id)
	{
		$this->load->view('landing_page');
	}

	// operations de creation d'un utilisateur
	public function store(array $user)
	{
		$response = $this->user->insert($user['lname'],$user['fname'],$user['email'], $user['login'],$user['pass'],$user['role']);

		return $response;
	}

	// operation de mise a jour
	public function update(array $user)
	{
		$response = $this->user->update($user['id'],$user['lname'],$user['fname'],$user['email'], $user['login'],$user['pass'],$user['role']);

		return $response;
	}

	// operation de suppression d'un utilisateur
	public function delete($id)
	{
		$response =  $this->user->delete_soft($id);

		$this->session->set_flashdata('msg', 'Utilisateur activé avec succès');

		redirect('userctrl/');

		// return $response;
	}

	// operation de mise a jour
	public function activate_user($id)
	{
		$response = $this->user->set_state($id, 'A');

		$this->session->set_flashdata('msg', 'Utilisateur activé avec succès');

		redirect('userctrl/');
		// return $response;
	}

	// operation de mise a jour
	public function deactivate_user($id)
	{
		$response = $this->user->set_state($id, 'I');

		$this->session->set_flashdata('msg', 'Utilisateur désactivé avec succès');

		redirect('userctrl/');

		// return $response;
	}

	// operation de mise a jour
	public function bloc_user($id)
	{
		$response = $this->user->set_state($id, 'B');

		$this->session->set_flashdata('msg', 'Utilisateur bloqué avec succès');

		redirect('userctrl/');

		// return $response;
	}

}