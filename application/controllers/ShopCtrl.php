<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."controllers/ConnexionCtrl.php");


class ShopCtrl extends ConnexionCtrl {

    public function __construct() {
        parent::__construct();
     }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{   

        //verifier s'il y'a un utilisateur
        // en session
        $login = (boolean) $this->session->userdata("login"); 

        // var_dump($login); exit();

		$this->load->view('shop/shop_index',["login"=>$login]);
	}

    // Ecrire une methode de connexion 
    // via ajax

    public function connexion()
	{   

        // recuperation des champs de connexion


        // $csrf = array(
        //     'name' => $this->security->get_csrf_token_name(),
        //     'hash' => $this->security->get_csrf_hash()
        // );
        // ['csrf'=>$csrf]
        // var_dump($_POST);

		// execution fonction de validation
		$this->login_form_validation_request();

		// si la validation ne se passe pas bien
		if ($this->form_validation->run() == FALSE)
		{
			
			$data = [
                "status"=>false,
                "msg" => $this->form_validation->error_array(),
            ];

            echo json_encode($data);

			
		}
		// si la validation se passe bien
		else
		{	
			// demander si l'utilisateur existe
			// demander si c'est le bon login + mot de passe
			$login = $this->input->post('login');
			$mdp = $this->input->post('password');

			$user = $this->user->connect_user($login,$mdp);

			// si l'utilisateur est vide
			if ($user == NULL) {

				$this->session->set_flashdata('msg', 'Login ou mot de passe incorrecte');
				
				$this->load->view('connexion/login');

                $data = [
                    "status"=>false,
                    "msg" => 'Login ou mot de passe incorrecte',
                ];

                echo json_encode($data);
				
			} else {
				// verifier la date d'expiration du password utilisateur
				$exp = $this->check_date_exp($user[0]->id_user);
				// si non ok rediriger l'utilisateur vers la page de reinitialisation
				if ($exp == false) {

					// enregistrer l'utilisateur en session puis le rediriger
					// sur la page d'accueil
					$this->session->set_userdata(['user'=>$user,'login'=>true]);

                    $data = [
                        "status"=>true,
                        "msg" => 'Connexion effectuée avec succès',
                    ];
    
                    echo json_encode($data);
					
					//redirect('userctrl/');// reinitialisation
				}

				// sinon on le renvoie a la page de connexion
				// avec message d'erreur 
				// login ou mot de passe incorrecte
				// redirection vers la page d'accueil
				// redirect('');
				
			}
			
		}
	}

    /**
	 * Index Page for this controller.
	 */
    public function show_all_product()
	{
		$this->load->view('shop/all_products');
	}

    /**
	 * Index Page for this controller.
	 */
    public function commande()
	{
		$this->load->view('shop/commande');
	}

    /**
	 * Index Page for this controller.
	 */
    public function panier()
	{
		$this->load->view('shop/panier');
	}

    /**
	 * Index Page for this controller.
	 */
    public function product_details()
	{
		$this->load->view('shop/product_details');
	}


}