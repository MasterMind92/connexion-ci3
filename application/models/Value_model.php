<?php

class tmp_model extends CI_Model {

    // CRUD
    protected $table;

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->table = "table_name";
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

        $this->db->set('var',$var);
        $this->db->set('var',$var);
        $this->db->set('var',$var);
        $this->db->set('var',$var);
        $this->db->set('var',$var);

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
     * [Description for add]
     *
     * @param mixed $param
     * 
     * @return [type]
     * 
     */
    public function update_table_name($param){

        $this->db->set('var',$var);

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