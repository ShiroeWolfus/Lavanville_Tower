<?php
function connectToDB() {

    $host = "dbPk" ;
    $user = "shiroe" ;
    $pwd = "paladin85" ;
    $dbname = "PkStadium" ;

    try {
        $dbBB = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        $dbBB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    return $dbBB ;
}