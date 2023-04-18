<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";
//Instanciar objeto
$plantilla = new ControladorPlantilla();
//Ejecutar el método
$plantilla ->ctrGetPlantilla();