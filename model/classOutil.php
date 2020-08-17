<?php 

class Outil{
        private $id;
        public $nom;

        public static function select(){
            header("Content-Type: application/json; charset=UTF-8");
            require "db/db.php";

            $req = $db->prepare("SELECT `nom_outil` FROM `outil` WHERE 1");
            $req->execute();
            $resultats = $req->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($resultats);           
        }
    }