<?php 
header( "Content-type: application/json" );

if($_GET['action'] == "a1"){

    require "classOutil.php";
    $tool = Outil::select();
}




