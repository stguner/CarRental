<?php 
include 'islem.php';
    $kullanicisor=$conn->prepare("select * from customers where email=:email");
	$kullanicisor->execute(array(
		'email' => $_SESSION['kullanici_email']
		));
    $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

    if($kullanicicek['situation']!='offline'){
    $exits=$conn->prepare("UPDATE `customers` SET 
                situation=:situation where email=:email");
    $offline=$exits->execute(array(
                'situation' => "offline",
                'email' => $kullanicicek['email']
                ));
            }
session_destroy();
header("Location:login_register.php?durum=exit&kullanicisil=waiting&deleteMessage=waiting");

 ?>