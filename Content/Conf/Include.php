<?php

/**
 * @author Rolando Arriaza
 * @access public
 * @version 1.0
 * @since 2015
 * 
 * INCLUDE.PHP
 * SE INCLUIRAN TODOS LOS SCRIPTS DEL PLUGIN 
 * SI REMUEVE ALGUN SCRIPT PUEDE QUE EL PLUGIN NO FUNCIONE COMO DEBE
 * DADO CASO NO FUNCIONE , REVISAR LAS RUTAS DEL SCRIPT
 * 
 */

include 'Config.php';

$GLOBAL_ROOT = $CONFIG_["DIR"]["root"];
$GLOBAL_DIRECTORY = $CONFIG_["DIR"]["directory"];


/**
 * LLAMADA DE LAS BASES DE DATOS 
 * NO DEPENDE LA UNA DE LA OTRA
 */
include 'Class/Database/Class.Mysql.php';
include 'Class/Database/Class.Sqlite.php';

/**
 * LLAMADA DE LAS CLASES DIRECTORY
 * directory.php no depende de otra clase
 * file.php depende de directory
 */
include 'Class/Directory/Class.Directory.php';
include 'Class/Directory/Class.File.php';


/**
 * LLAMADA DE CAPTCHA
 * BaseCaptcha.php depende de Captcha.php
 */
require 'Class/Tools/BaseCaptcha.php';
require 'Class/Tools/Captcha.php';


/**
 * LLAMADA DE PAGINACION
 * basepaginacion.php depende de paginacion.php
 */
require 'Class/Pagination/Class.Paginacion.php';
require 'Class/Pagination/Class.BasePaginacion.php';


/**
 * LLAMADA DE DISTINTAS CLASES
 * CADA CLASE ES INDEPENDIENTE DE LA OTRA
 */

require 'Class/Tools/Encriptacion.php';
require 'Class/Tools/Validation.php';
require 'Class/Tools/GoogleTranslate.php';
require 'Class/Tools/CurlAccess.php';
require 'Class/Tools/JsonClass.php';

/**
 * LLAMADA DE LAS CLASES EN EL DIRECTORIO VIEW 
 * 
 */

require 'Class/View/ViewLoader.php';
require 'Class/View/ImageRender.php';


/* CLASE PHP MAIL , HEREDA CLASES EXTERNAS DENTRO DEL DIRECTORIO Mail**/

require 'Class/Mail/PHPMailerAutoload.php';

/*LLAMADA DE LA CLASE HEADER **/
require 'Class/Http/Class.Header.php';

?>
