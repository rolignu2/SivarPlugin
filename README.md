  
      #Proyecto Codename SIVAR-PLUGIN 
      
      @name SIVAR PLUGIN 
      @version 1.2
      @author Rolando Arriaza <Rolignu90@gmail.com>
      @copyright (c) 2015, ROLIGNU
      @since 1.0

     SIVAR PLUGIN SON UN CONJUNTO DE SCRIPTS EN LA CUAL HACE MAS FACIL
     LA VIDA DEL PROGRAMADOR SIN NECESIDAD DE TENER QUE REINVENTAR LA RUEDA
     O USAR ALGUN FRAMEWORK EN LA CUAL EL PROYECTO SE HACE PESADO
     
     VERSION 1.2:
     ->MEJORAS EN VARIOS 
     ->SE AGREGO SCRIPT DE TRADUCTOR
     ->SE AGREGO UN CONTROLADOR DEL SCRIPT PAGINACION 
     ->SE AGREGO LA CLASE PARA MANEJO DE SQLITE
     ->SE AGREGO LA CLASE HEADER EN MANIPULACION DE TIPO HTTP
     ->SE AGREGO LA CLASE PHPMAIL CON CAPACIDAD DE ENVIO SMTP Y POP3
     ->SE AGREGO LA CLASE VIEWLOADER PARA 
         MANEJO DE PLANTILLAS HTML O PHP 
     ->SE AGREGO LA CLASE IMAGERENDER PARA MANEJO DE ENTRADA Y SALIDA 
        DE IMAGENES EN FORMATO JPG , PNG Y GIF
     ->SE AGREGO UN CONTROLADOR PARA EL USO DE CAPTCHA
    

 


     /**
      * ¿DONDE AGREGAR MI PROYECTO?
      *  LOS PROYECTOS DEBEN SER AGREGADOS EN LA CARPETA "Content"
      *  POR EJEMPLO:
      *     TIENE UN PROYECTO EN LA CUAL CONSISTE DE 
      *     *js
      *     *image
      *     *css
      *     *index.php
      *  CADA ARCHIVO DEBE IR DENTRO DE LA CARPETA CONTENT
      *  YA QUE EL ENRUTADOR ESTA ESPECIFICADO PARA DICHO DIRECTORIO  
      */

     
     /**
      * NO MODIFICAR 
      * CUALQUIER MODIFICACION PUEDE AFECTAR EL RESULTADO 
      */

     $SERVER_DIR = getcwd();
     $ARRAY_DIR = explode("\\", $SERVER_DIR);
     $DIR_NAME = $ARRAY_DIR[count($ARRAY_DIR)-1];
     
     //OPCIONAL
     header("Cache-Control: no-cache");
     //OPCIONAL
     header("Pragma: no-cache");
     
     //NOMBRE DEL ARCHIVO EN LA CUAL INICIARA , GENERALMENTE ES UN INDEX.PHP    
     header("Location: /$DIR_NAME/Content/index.php" );  

     ***************************************************************************
