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

    }


}