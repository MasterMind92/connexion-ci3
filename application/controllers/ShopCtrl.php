<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopCtrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('shop/shop_index');
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
		$this->load->view('product_details');
	}


}