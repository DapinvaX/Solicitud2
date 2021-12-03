<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once 'conexion.php';


function insertarHorario()
{


$con = obtenerConexion();    
try{
    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO horarios () VALUES ()");

    $stmt->bindParam(':', $);
   
  


    $stmt->execute();

    $id = $con->lastInsertId();

    return $id;

  
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$con = null;


}