<?php namespace SivarApi\Tools\Captcha\BaseCaptcha;


//include "Class/Tools/Captcha.php";

class BaseCaptcha {
    
    
    /**
     * LLAVE PUBLICA PREDETERMINADA
     * para obtener una llave propia generarla en 
     * https://www.google.com/recaptcha/admin
     */
    protected $publickey = "6LcHKeMSAAAAAOT44ko9ABNagbFST3RAMrinllIg";
    
    
    /**
     * LLAVE PRIVADA PARA COMPARACION DE LA CAPTCHA MANDADA
     * 
     */
    protected $privatekey = "6LcHKeMSAAAAAOAoANaejOfQyUw5UyTpGbaeB7YX";
    
    
    function __construct($llave_publica = null , $llave_privada = null) {
        if(!Validacion::Vacio($llave_publica) 
                || !Validacion::Vacio($llave_privada)){
            $this->publickey = $llave_publica;
            $this->privatekey = $llave_privada;
        }
    }
    
    function CrearCaptcha($error = null)
    {
        return recaptcha_get_html($this->publickey, $error);
    }
    
    function CompararCaptcha()
    {
        if(isset($_REQUEST["recaptcha_response_field"]))
        {
             $resp = recaptcha_check_answer ($this->privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_REQUEST["recaptcha_challenge_field"],
                                        $_REQUEST["recaptcha_response_field"]);
             
             if($resp->is_valid) return true;
             else return false;

        }
        else return false;
    }
    
}
