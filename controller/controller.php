<?php

    // define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/verlibros');
    // define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/inicio');
    // define('LOGIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/login');
    // define('FOTOS', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/valida_foto');
    // define('NEWLIBRO', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/cargarlibro');

    // require_once 'views/loginView.php';
    // require_once "libs/Smarty.class.php";
    require_once 'model/studentModel.php';

    class controller {
            protected $view;
            protected $model;
            
            public function __construct(){
               
                $this->studentModel = new studentModel();
                $this->studentController = new studentController();
            }
        
        function mostrar_Login(){
            
        }
        
        function isAdmin() {
            // session_start();
            if (isset($_SESSION['USERNAME']))
                return true;
            return false;
            
        }
        
    }
?>