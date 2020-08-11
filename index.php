<?php

    require "controller/controller.php";

    if(isset($_GET)){
        if($_GET["action"] == "paillasse"){
            paillasse();
        } else {
        indexView();
    }
}