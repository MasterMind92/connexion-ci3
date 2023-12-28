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
		$this->load->library(array('form_validation','Excel'));
		$this->load->model('User_model','user');
	}

	public function index()
	{	
		$users = $this->user->get_all_users();

		$this->load->view('users/index',['users'=>$users,'submit_link'=>"Userctrl/search"]);
		
	}

	// vue de reinitialisation de l'utilisateur
	public function add()
	{	
		$this->user_validation_request();

		 // si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('users/add_users');
		}
		else
		{	
			// si la validation se passe bien
			//enregistrement des variable
			$data = [
				'lname' => $this->input->post('nom'),
				'fname' => $this->input->post('prenoms'),
				'email' => $this->input->post('email'),
				'pass' => $this->input->post('password'),
				'login' => $this->input->post('login'),
				'tel' => $this->input->post('phone'),
				'role' => $this->input->post('role'),
				'etat' => $this->input->post('etat'),
			];

			// Exécution de la methode d'insertion
			$add_response = $this->user->add($data);

			// Mise en place du message
			if ($add_response != NULL) {
				$this->session->set_flashdata('msg', 'Infos utilisateur enregistré avec succès');
			} else {
				$this->session->set_flashdata('msg', 'Echec enregistrement utilisateur');
			}

			$this->load->view('partials/head');
			$this->load->view('partials/admin/sidebar');
			$this->load->view('users/add_users');
			$this->load->view('partials/foot');
			
			// si c'est bon on le connecte
			// page de succes
			// $this->load->view('formsuccess');
		}
		
	}

	// vue de reinitialisation de l'utilisateur
	public function inscription()
	{	
		$this->inscription_validation_request();

		 // si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('users/add-user-infos');
		}
		else
		{	
			// si la validation se passe bien
			//enregistrement des variable
			$data = [
				'nom' => $this->input->post('nom'),
				'prenoms' => $this->input->post('prenoms'),
				'email' => $this->input->post('email'),
				'adresse' => $this->input->post('adresse'),
				'telephone' => $this->input->post('phone'),
				'date_nais' => $this->input->post('date_nais'),
			];

			// Exécution de la methode d'insertion
			$add_response = $this->user->add_inscription($data);

			// Mise en place du message
			if ($add_response != NULL) {
				$this->session->set_flashdata('msg', 'Infos utilisateur enregistré avec succès');
			} else {
				$this->session->set_flashdata('msg', 'Echec enregistrement utilisateur');
			}

			$this->load->view('partials/head');
			$this->load->view('partials/admin/sidebar');
			$this->load->view('users/add-user-infos');
			$this->load->view('partials/foot');
			
			// si c'est bon on le connecte
			// page de succes
			// $this->load->view('formsuccess');
		}
		
	}

	// vue d'import utilisateur
	public function import() : void {
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
				$error = array('error' => $this->upload->display_errors());

				// affichage formulaire d'import
				$this->load->view('users/import_users',$error);

				// $this->load->view('upload_form', $error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$this->session->set_flashdata('msg',"Fichier enregistré avec succès");
				// affichage formulaire d'import
				$this->load->view('users/import_users',$data);

				// $this->load->view('upload_success', $data);
		}

	}

	// operation de recuperation des donnees 
	public function json_response() 
	{
		
        $data = array();
		
        if(!empty($req))
        {
            foreach ($req as $key=>$value)
            {
                $edit = "";
                $delete = "";
    
                $nestedData['id'] = $key+1;
                $nestedData['name'] = $value['name'];
                $nestedData['email'] = $value['email'];
                $nestedData['mobile'] = $value['mobile'];
                
                $nestedData['manage'] = "<a href='$edit' class='btn  btn-warning  btn-xs'><i class='fa fa-pencil'></i> Edit</a> &nbsp;&nbsp; <a onclick='return delet()' href='$delete' class='btn btn-danger btn-xs confirm-delete' ><i class='fa fa-trash'></i> Delete</a>";
    
                $data[] = $nestedData;
    
            }
        }
        
        $json_data = array(
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );
        echo json_encode($json_data);	
	}

	// vue d'ajout d'un utilisateur
	public function modify($id)
	{	
		$user = $this->user->get_user_by_id($id);

		// var_dump($user);

		$this->user_validation_request();

		 // si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('blank',['view'=>'users/show_users','user'=>$user]);
			
		}
		// si la validation se passe bien
		else
		{	
			// var_dump($_POST);
			// demander si l'utilisateur existe
			// demander si c'est le bon login + mot de passe
			$data = [
				'lname' => $this->input->post('nom'),
				'fname' => $this->input->post('prenoms'),
				'email' => $this->input->post('email'),
				'pass' => $this->input->post('password'),
				'login' => $this->input->post('login'),
				'role' => $this->input->post('role'),
				'etat' => $this->input->post('etat'),
			];

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
	public function user_validation_request()
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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|differs[login]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'differs'=>'le champ %s ne doit pas être identique au champ email',
				'valid_email'=> 'le champ %s n\'est pas une adresse mail valide',
			)
		);

		// login validation
		$this->form_validation->set_rules('login', 'Login', 'required|differs[email]|min_length[6]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'differs'=>'le champ %s ne doit pas être identique au champ email',
				'min_length'=>'le champ %s ne doit pas avoir moins de 6 caractères',
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

	// operation validation du formulaire de connexion
	public function inscription_validation_request()
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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|differs[login]',
			array(
				'required' => 'le champ %s est obligatoire.',
				'differs'=>'le champ %s ne doit pas être identique au champ email',
				'valid_email'=> 'le champ %s n\'est pas une adresse mail valide',
			)
		);

		// login validation
		$this->form_validation->set_rules('date_nais', 'Date de naissance', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
			)
		);
		// login validation
		$this->form_validation->set_rules('adresse', 'Date de naissance', 'required',
			array(
				'required' => 'le champ %s est obligatoire.',
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
		// $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|trim|alpha_numeric',
		// 		array(
		// 			'required' => 'le champ %s est obligatoire.',
		// 			'min_length'=> 'le champ %s est inférieur à 8 caractères',
		// 			'alpha_numeric'=> 'le champ %s doit contenir que des chiffres et des lettres',
		// 		)
		// );

		

		// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');
	}

	

}
