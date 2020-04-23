<?php
include_once('topo.php');

# área de conteúdo
if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal.php";
        include_once("$var");
}else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
}

include_once('rodape.php');
?>