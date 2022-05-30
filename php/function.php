<?php
ob_start();
session_start();

function islemKontrol(){
	if($_SESSION['kullanici_email'] != 'gunersuleymanturker@gmail.com' ){
		session_destroy();
		header("Location:index.php?durum=izinsizislem");
		exit;
	}
}


?>