<?php 

class Element{
        private $id;
        public $nom;

        public static function selectTwoElements(){
            header("Content-Type: application/json; charset=UTF-8");
            require "db/db.php";

            $reqElementOne = $db->prepare("SELECT * FROM `element` WHERE `nomChimique_element` = :nomChimique_element");
            $reqElementTwo = $db->prepare("SELECT * FROM `element` WHERE 1");


            $reqPrepareMdp->bindValue(":nomChimique_element", $_POST['']);

            $reqElementOne->execute();
            $reqElementTwo->execute();

            $resultatsOne = $reqElementOne->fetchAll(PDO::FETCH_OBJ);
            $resultatsTwo = $reqElementTwo->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($resultats);           
        }
    }


    // SELECT `nomChimique_element` FROM `element` WHERE 1

    // SELECT `nomChimique_element` FROM `element` WHERE `nomChimique_element` = Eau distillée;
    // SELECT `nomChimique_element` FROM `element` WHERE `nomChimique_element` = "Eau distillée" AND `nomChimique_element` = "Hydroxyde de sodium";