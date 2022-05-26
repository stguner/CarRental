<?php 
include 'connection.php';
include 'function.php';
ob_start();
session_start();

//UserAccount- Şifre Değiştirme
if (isset($_POST['sifre_degistirme'])) {
    islemKontrol();
    $kullanici_password=$_POST['password1'];
    $kullanici_confirmPassword=$_POST['password2'];

    if(strlen($kullanici_password) >= 6){

        if($kullanici_password==$kullanici_confirmPassword){
        $ayarkaydet=$conn->prepare("UPDATE customers SET
        password=:password
        WHERE id=:id");

        $update=$ayarkaydet->execute(array(
        'password' => $_POST['password1'],
        'id' => $_SESSION['kullanici_id']
        ));
            if($update){
            Header("Location:user_change_password.php?durum=sifre_degisti");
            }else {
            Header("Location:user_change_password.php?durum=sifre_degistirilemedi");
            }
        }else{
            header("Location:user_change_password.php?durum=farklisifre");
        }
    }else{
    header("Location:user_change_password.php?durum=eksiksifre");
    }


}
?>