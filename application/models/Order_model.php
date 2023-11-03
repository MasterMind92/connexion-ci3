<?php

class Order_model extends CI_Model {

    // CRUD
    protected $table;
    protected $table_order_products;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "orders";
        $this->$table_order_products = "order_products";
    }

    
    /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function add($param){

        $this->db->set('shipping',$param['shipping']);
        $this->db->set('amount',$param['amount']);
        $this->db->set('tax',$param['tax']);
        $this->db->set('payment',$param['payment']);
        $this->db->set('purchase_order',$param['purchase_order']);
        $this->db->set('user_id',$param['user_id']);
        $this->db->set('created_at', date("Y-m-d H:i:s"));

        return $this->db->insert($this->table);
    }

     /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function get_table_name($param){

        $query = $this->db->select('*')
                          ->from()
                          ->where('',$param)
                          ->get();

        return $query->result();

    }


     /**
     * Fonction de mise a jour d'une commande avec numero facture
     *
     * @param mixed $param['invoice_id','invoice_number']
     * 
     * @return Boolean
     * 
     */
    public function update_order_with_invoice($param){

        $this->db->set('invoice_id',$param['invoice_id']);
        $this->db->set('invoice_number',$param['invoice_number']);
        $this->db->set('updated_at', date("Y-m-d H:i:s"));

        $this->db->where('id',$param['id']);

        return $this->db->update($this->table);
    }

    
     /**
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function delete($param){
        
        $this->db->set('var',$var);

        return $this->db->update($this->table);
    }


}