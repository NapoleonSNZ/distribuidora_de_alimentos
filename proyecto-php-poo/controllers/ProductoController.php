<?php

class productoController{
    public function index() {
                       
       // echo "Controlador producto, Accion Index";
    
        //Renderizar la Vista
        require_once 'views/producto/destacados.php';
    }
}