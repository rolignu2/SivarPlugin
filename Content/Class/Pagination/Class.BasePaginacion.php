<?php  

/**
 * @depends Class.Paginacion.php
 * @author Rolando Arriaza 
 * @version 1.0
 * @todo Clase adaptador de la clase paginacion
 *             esta clase mejora las buenas practicas de programacion 
 *             haciendo asi mas facil la implementacion del metodo 
 */

//include "Class/Tools/Class.Paginacion.php";



class BasePaginacion extends Paginacion  {
   
    
    protected $ARRAY_PAGINATION = null;
    protected $POR_PAGINA = 10;
    protected $SEPARADOR = "&nbsp;";
    protected $NOMBRE_PAG = "pag";

    public function __construct(
            $conn = null , 
            $array_paginacion = null,
            $porpagina = 10 , 
            $sepadaror = "&nbsp;",
            $nombre_pag = "pag"
            ) 
    {
        $this->POR_PAGINA = $porpagina;
        $this->ARRAY_PAGINATION = $array_paginacion;
        $this->NOMBRE_PAG = $nombre_pag;
        $this->SEPARADOR=$sepadaror;
        parent::__construct($conn);
    }
    
   
    public function SetPorPagina($cant)
    {
        $this->POR_PAGINA = $cant;
    }
    
    public function SetPaginacionData($array_data)
    {
        $this->ARRAY_PAGINATION = $array_data;
    }
    
    
    public function SetNombrePag($nombre)
    {
        $this->NOMBRE_PAG = $nombre;
    }
    
    
    public function SetSeparador($separador)
    {
        $this->SEPARADOR=$separador;
    }


    public function GetPaginacion()
    {
          if(!is_array($this->ARRAY_PAGINATION))
              return FALSE;
          
          parent::agregarArray($this->ARRAY_PAGINATION);
          parent::porPagina($this->POR_PAGINA);
          parent::nombreVariable($this->NOMBRE_PAG);
          parent::linkSeparador($this->SEPARADOR);
          parent::ejecutar();
          return parent::fetchTodo();
    }
    
    public function Getnavegacion()
    {
        return parent::fetchNavegacion();
    }
    
    
  
}
