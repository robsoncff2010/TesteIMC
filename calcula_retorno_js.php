<?php

$button1 = ( isset($_POST['buttonMH_ajax']) )     ? $_POST['buttonMH_ajax']  : ""; 
$idade   = ( isset($_POST['idade_ajax']) )        ? $_POST['idade_ajax'] : "";
$altura  = ( isset($_POST['altura_ajax']) )       ? $_POST['altura_ajax'] : "";
$peso    = ( isset($_POST['peso_ajax']) )         ? $_POST['peso_ajax'] : "";
$button2 = ( isset($_POST['buttonFisica_ajax']) ) ? $_POST['buttonFisica_ajax'] : "";

$resultado = ($peso / ($altura*2));

$arquivos[0] = array
(
    "resultado" => $resultado, 
    "sexo"      => $button1,
);

echo json_encode($arquivos);