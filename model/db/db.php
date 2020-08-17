<?php
header('Content-Type: application/json');
    require ("settingDB.php");

  
    try{
        # var login databass
        $db = new PDO ("mysql:host=".$host.";dbname=".$dbname,$userBdd, $passBdd );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    } catch(Exception $e) {
        $messageError = $e->getMessage();
    }
