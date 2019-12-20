<?php

// require_once 'controller/controller.php';
// require_once 'model/studentModel.php';
    
    $dniAlumno = $_POST["dniAlumno"];
    $nombre = $_POST['nombre'];
    $apellido = $_POST["apellido"];
    if (!empty($dniAlumno)){
        echo json_encode('correcto');
    }
        else{
            echo json_encode('error');
        }
        