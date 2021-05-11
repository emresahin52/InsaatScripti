<?php

include "Config-database.php";


if ($_POST){

    $isim = $_POST["isim"];
    $mail = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    if (!$isim || !$mail || !$konu || !$mesaj){
        echo "bos";
    }else{
        $query = $db->prepare("INSERT INTO mesajlar SET mesaj_gonderenisim=? , mesaj_gonderenmail= ?,mesaj_konu=?,mesaj_aciklama=? ");
        $insert =$query->execute(array($isim,$mail,$konu,$mesaj));
        if($insert){
            echo "yes";
        }
        else{
            echo "no";
        }
    }
}
?>