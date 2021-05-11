<?php

include "../Config/database.php";
//SİTE AYARLARI 


/*extract($_POST);
if(isset($ayarlar)){
    

    $site_id = $_GET["site_id"];

    if (!$site_title || !$site_url || !$site_desc || !$site_keyw || !$site_telefon || !$site_mail || !$site_saat || !$site_adres || !$site_footer || !$site_harita || ){
        header("Location: site-ayarlari.php? site-guncelle=bos");


    }else{

        $query = $db->prepare("UPDATE ayarlar SET site_title=?, site_url=?, site_desc=?, site_keyw=?, site_telefon=?, site_mail=?, site_saat=?, site_adres=?, site_footer=?, site_harita=? WHERE site_id=? ");
        $update=$query->execute(array($site_title,$site_url,$site_desc,$site_keyw,$site_telefon,$site_mail,$site_saat,$site_adres,$site_footer,$site_harita,$site_id));
        if($update){
            header( "Location: site-ayarlari.php?site-guncelle = yes");

        }else {
            header( "Location: site-ayarlari.php?site-guncelle = no");
        }
    }
}*/

//HAKKIMIZDA AYARLARI

if(isset($_POST['hakkimizda'])){
    

    $hakkimizda_id = $_POST["hakkimizda_id"];

    if (!$_POST['hakkimizda_baslik'] || !$_POST['hakkimizda_medya'] || !$_POST['hakkimizda_aciklama'] || !$_POST['hakkimizda_vizyon'] || !$_POST['hakkimizda_misyon'] ){
        header("Location: hakkimizda.php?hakkimizda-guncelle ==bos");


    }else{

        $query = $db->prepare("UPDATE hakkimizda SET hakkimizda_baslik=?, hakkimizda_medya=?, hakkimizda_aciklama=?, hakkimizda_vizyon=?, hakkimizda_misyon=? WHERE hakkimizda_id='{$hakkimizda_id}'");
        $update=$query->execute(array($_POST['hakkimizda_baslik'],$_POST['hakkimizda_medya'],$_POST['hakkimizda_aciklama'],$_POST['hakkimizda_vizyon'],$_POST['hakkimizda_misyon']));
        if($update){
            header( "Location: hakkimizda.php?hakkimizda-guncelle = yes");

        }else {
            header( "Location: hakkimizda.php?hakkimizda-guncelle = no");
        }
    }
}


//DDUYURU AYARLARI

extract($_POST);
if(isset($duyurular)){
    

    $duyuru_id = $_GET["duyuru_id"];

    if (!$duyuru_kalinyazi || !$duyuru_link || !$duyuru_aciklama ){
        header("Location: duyurular.php? duyuru-guncelle=bos");

        
    }else{

        $query = $db->prepare("UPDATE duyurular SET duyuru_kalinyazi=?, duyuru_aciklama=?, duyuru_link=?, WHERE duyuru_id=?");
       
        $update=$query->execute(array($duyuru_kalinyazi,$duyuru_aciklama,$duyuru_link,$duyuru_id));
        
        if($update){
            header( "Location: duyurular.php? duyuru-guncelle= yes");

        }else {
            header( "Location: duyurular.php? duyuru-guncelle = no");
        }
    }
}

?>