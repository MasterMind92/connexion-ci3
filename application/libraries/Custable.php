<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// require_once('PHPExcel.php');


// Constituer un tableau parametrable
// selon la structure standard 
class Custable
{
    // 

    public function __construct(){

    }

    // fonction de compilation de tableau
    public function index(){}

    // render table tag
    public function render_table_tag($class,$id){}
    
    // render thead tag
    public function render_thead_tag($array){
        
        $response = "<thead><tr>";
        
        for ($i=0; $i < count($array); $i++) { 
            $response .= "<th>".$array[$i]."</th>";
        }
        $response .= "</tr></thead>";

        return $response;
    }

    // render tbody tag
    public function render_tbody_tag($class,$id){
        $response = "<thead><tr>";
        
        for ($i=0; $i < count($array); $i++) { 
            $response .= "<th>".$array[$i]."</th>";
        }
        $response .= "</tr></thead>";

        return $response;
    }

    // render tfoot tag
    public function render_table_row_tag($array){
        
        for ($i=0; $i < count($array); $i++) {
            $response = "<tr>";
            
            for ($j=0; $j < count($array[$i]); $j++) { 
                # code...
                $response .= "<th>".$array[$i]."</th>";
            } 
        }
        $response .= "</tr></thead>";

        return $response;
    }
    
    // render tfoot tag
    public function render_tfoot_tag($class,$id){}

}