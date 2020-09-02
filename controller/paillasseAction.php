<?php
header( "Content-type: application/json" );
require 'classElement.php'

var_dump($_POST);

if($_POST['elements'] == "deux"){
    echo "deux";
}

if($_POST['elements'] == "trois"){
    echo "trois";
}