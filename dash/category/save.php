<?php

require_once '../connection.php';

try{

    if(empty($_POST['id'])){
        $sql = "INSERT INTO category (label) VALUES (:label)";
        $res = $pdo->prepare($sql);
        $res->execute(['label' => $_POST['label']]);
    }
    else{
        $sql = "UPDATE category SET label=:label WHERE id=:id";
        $res = $pdo->prepare($sql);
        $res->execute(['label' => $_POST['label'], 'id' => $_POST['id']]);
    }
}
catch(\Throwable $t){
    echo '<strong>Impossible dexecuter la requete, recommencez</strong>';
    die;
}

header('Location: index.php?page=list');
exit;