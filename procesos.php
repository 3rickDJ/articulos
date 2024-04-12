<?php

$tipo = isset($_GET['tipo'])?$_GET['tipo']: 0;
include "sql.php";
include "articulo.php";

$a = new articulo();

if($tipo == 1){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $nom = isset($_GET['nom']) ? $_GET['nom'] : "";
    $costo = isset($_GET['costo']) ? $_GET['costo'] : "";

	$a->insertarArticulo($id, $nom, $costo);
}else if($tipo == 2){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $nom = isset($_GET['nom']) ? $_GET['nom'] : "";
    $costo = isset($_GET['costo']) ? $_GET['costo'] : "";

	$a->actualizarArticulo($id, $nom, $costo);
}else if($tipo == 3){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
	$a->eliminarArticulo($id);
}else if($tipo == 4){

}

?>