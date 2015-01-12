<?php

/**
 * @author Rolando Arriaza <rolignu90@gmail.com>
 * @copyright (c) 2015, Rolignu
 * @version 1.0
 * @access public
 * 
 * SCRIPT CONFIG EN EL CUAL SE EJECUTA TODAS LAS CONFIGURACIONES
 * DE LA BASES DE DATOS EN DADO CASO EXISTA DE FORMA RELATIVA
 * 
 * 
 */

$SERVER_DIR = getcwd();
$ARRAY_DIR = explode("\\", $SERVER_DIR);
$DIR_NAME = $ARRAY_DIR[count($ARRAY_DIR)-1];

$CONFIG_ = array(
    
    "DB_MYSQL" =>[
         "classname" => '',//tipo de la clase
	 'driver' => "mysql",//driver de conexion , defecto mysql
	 'persistent' => false,//datos persistentes falso
	 'host' => "localhost",//hosting
	 'user' => "root", //usuario
	 'password' => "",//password de la base de datos si es requerido
	 'database' => "datatables", //base de datos a utilizar
         'port' => "3306", //puerto de la base de datos si es requerido
	 'prefix' => false, //uso de prefijos defecto falso
	 'encoding' => 'utf8',//codificacion utf-8 segun normalizaciones
	 'timezone' => 'UTC',//zona horaria
	 'cacheMetadata' => true,//uso de metadatos
    ],
    
    "DB_SQLITE" => [
        "dir"=> "$SERVER_DIR/Class/Database/sqlitedb/example.db"
    ],
    
    
    "DB_ORACLE" => [
        
    ],
    
    
    "DB_MONGO" => [
        
    ],
    
    "DIR" =>[
        "root"=> $_SERVER['DOCUMENT_ROOT'],
        "directory"=> $DIR_NAME,
        "server" => $_SERVER["SERVER_NAME"],
        "user_agent"=> $_SERVER["HTTP_USER_AGENT"]
    ]
     
)



?>



