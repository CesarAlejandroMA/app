<?php 

namespace usuarioController;

use baseControler\BaseController;
use conexionDb\ConexionDbController;

    class UsuarioController extends BaseController
    {

        function create(){

        }
        function read(){
            $sql = 'select * from usuarios'; //Traer los usuarios
            $conexiondb = new ConexionDbController();
            $usuarios = $conexiondb->execSQL($sql);
            $conexiondb->close();
            return $usuarios;
        }
        function update(){
            
        }
        function delete(){
            
        }

    }

?>