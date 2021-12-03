<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
include_once './dao/permisosDAO.php';
include_once './dao/profesorDAO.php';
//include_once './dao/horarioDAO.php';


$dni="";
$nombre="";
$telefono="";
$firma="";
$asignatura="";


$fechaIni = "";
$fechaFin = "";
$motivo = "";
$diaCompleto = 0;
$concedido = "";
$fecha = "";



if (isset($_POST['dni'])) {
    $dni = $_POST['dni'];
}
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
if (isset($_POST['telefono'])) {
    $telefono = $_POST['telefono'];
}
if (isset($_POST['firma'])) {
    $firma = $_POST['firma'];
}
if (isset($_POST['asignatura'])) {
    $asignatura = $_POST['asignatura'];
}





if (isset($_POST['fechaIni'])) {
    $fechaIni = $_POST['fechaIni'];
}

if (isset($_POST['fechaFin'])) {
    $fechaFin = $_POST['fechaFin'];
}
if (isset($_POST['motivo'])) {
    $motivo = $_POST['motivo'];
}
if (isset($_POST['diaCompleto'])) {
    $diaCompleto = $_POST['diaCompleto'];
}
if (isset($_POST['concedido'])) {
    $concedido = $_POST['concedido'];
}

if (isset($_POST['fecha'])) {
$fecha = $_POST['fecha'];
}


$idProfesor = insertarProfesor($dni,$nombre,$telefono,$firma,$asignatura);
$idPermiso = insertarPermiso($fechaIni,$fechaFin,$motivo,$diaCompleto,$concedido,$fecha,$idProfesor);

//insertarHorario($idPermiso);


echo "Insercion Correcta";
?>