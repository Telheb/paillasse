<?php

    require "controller/controller.php";

var_dump($_GET['action']);


    if(isset($_GET)){
        if($_GET && $_GET["action"] == "paillasse"){
            paillasse();
        }elseif($_GET && $_GET['action'] == "reac"){
            reac();
        } else {
        indexView();
    }
}