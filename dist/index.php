<?php
require_once("requisitos.php");

$rota_completa = $_SERVER["REQUEST_URI"];
$rotas = str_replace($rota_fixa, "", $rota_completa);
$rotas = explode("/", $rotas);

switch($rotas[0]){
    case "":
        require_once("models/model.php");
        break;

    default:
        require_once("models/erro_model.php");
        break;
}
?>