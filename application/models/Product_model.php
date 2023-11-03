<?php

class Product_model extends CI_Model {

    // CRUD
    protected $table;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "products";
    }

    
    /**
     * Fonction d'ajout de produits
     *
     * @param array $param['title','slug','description','infos_comp','price','weight','quantity','quantity_alert','image']
     * 
     * @return boolean
     * 
     */
    public function add($param){

        $this->db->set('title',$param['title']);
        $this->db->set('slug',$param['slug']);
        $this->db->set('description',$param['description']);
        $this->db->set('infos_comp',$param['infos_comp']);
        $this->db->set('price',$param['price']);
        $this->db->set('weight',$param['weight']);
        $this->db->set('quantity',$param['quantity']);
        $this->db->set('quantity_alert',$param['quantity_alert']);
        $this->db->set('image',$param['image']);
        $this->db->set('created_at',date("Y-m-d H:i:s"));
        $this->db->set('updated_at',date("Y-m-d H:i:s"));

        return $this->db->insert($this->table);
    }

     /**
     * Fonction de Recherche d'éléments 
     *
     * @param mixed $param
     * 
     * @return object [php standard object]
     * 
     */
    public function get_products($param){

        $query = $this->db->select('*')
                          ->from($this->table)
                        //   ->where('',$param)
                          ->get();

        return $query->result();
    }

     /**
     * Fonction de mise a jour de la table
     *
     * @param mixed $param
     * 
     * @return boolean
     * 
     */
    public function update_product($param){

        $this->db->set('title',$param['title']);
        $this->db->set('slug',$param['slug']);
        $this->db->set('description',$param['description']);
        $this->db->set('infos_comp',$param['infos_comp']);
        $this->db->set('price',$param['price']);
        $this->db->set('weight',$param['weight']);
        $this->db->set('quantity',$param['quantity']);
        $this->db->set('quantity_alert',$param['quantity_alert']);
        $this->db->set('image',$param['image']);
        $this->db->set('created_at',date("Y-m-d H:i:s"));
        $this->db->set('updated_at',date("Y-m-d H:i:s"));
        $this->db->where('id_product',$param['id_product']);

        return $this->db->update($this->table);
    }

     /**
     * Fonction de suppression Soft
     *
     * @param mixed $id
     * 
     * @return boolean
     * 
     */
    public function delete($id){
        
        $this->db->set('active',0);
        $this->db->where('id_product',$id);

        return $this->db->update($this->table);
    }


}