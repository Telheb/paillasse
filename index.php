<?php

    require "controller/controller.php";

    if(isset($_GET)){
        if($_GET && $_GET["action"] == "paillasse"){
            paillasse();
        } else {
        indexView();
    }
}