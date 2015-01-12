<?php namespace SivarApi\Tools;


/** 
 * @author Rolando Arriaza <rolignu90@gmail.com>
 * @copyright (c) 2014, ROLIGNU
 * @version 1.1
 * @license GPL
 */

define("JSON_ARRAY", "ARRAY");
define("JSON_CLASS", "CLASS");

class Json_class {
    
     private $jason_class = null; 
     private $jason_encode = null;
    
     public function __construct() {
         
     }
    
     
     public function JsonFile($archivo_json)
     {
         $str_json_conf = file_get_contents($archivo_json);
         $this->jason_encode = $str_json_conf;
         $class = json_decode($str_json_conf);
         $this->jason_class = $class;
     }
     
     public function GetDecodeJsonFile($option = JSON_ARRAY)
     {
          if($option == JSON_ARRAY){
             RETURN $this->objectToArray($this->jason_class);
          }
          else if ($option == JSON_CLASS)
          {
              RETURN $this->jason_class;
          }
     }
     
     
     public function SaveNewJasonFile($json_object , $direccion)
     {
          $fh = fopen($direccion, 'w')
            or die("Error al abrir fichero de salida");
         fwrite($fh, json_encode($conf_sistema,JSON_UNESCAPED_UNICODE));
         fclose($fh);
     }
     
     private function objectToArray($jason_class) {
        
        $recursivo = (array)$jason_class;
        foreach($recursivo  as $key => &$field){
               if (is_object($field)) {
                $field = $this->objectToArray($field);
            }
        }
        return $recursivo ;
     }
     
     
    
}
