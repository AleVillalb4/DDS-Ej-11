<?php
require_once 'modelo/nacionalidad.php';
require_once 'modelo/persona.php';


$nac =new Nacionalidad ();
$nac -> Id = '258';
$nac -> Descripcion = 'Argentino';

$per = new Persona ();
$per -> Nombre= 'Alejandro';
$per -> Direccion = 'Rioja 1700';
$per -> NumeroDeDocumento = '40121165';
$per -> Edad = '24';
$per -> Nacionalidad = $nac;


$per-> MostrarPersona();