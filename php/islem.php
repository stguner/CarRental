<?php 
include 'connection.php';
include 'function.php';


//Giriş Yapma
if (isset($_POST['login'])) {
	
	$kullanici_email=$_POST['kullanici_email']; 
	$kullanici_password=$_POST['kullanici_password'];

	$kullanicisor=$conn->prepare("select * from customers where email=:email and yetki=:yetki and password=:password");
	$kullanicisor->execute(array(
		'email' => $kullanici_email,
		'yetki' => 0,
		'password' => $kullanici_password
		
		));

    $adminsor=$conn->prepare("select * from customers where email=:email and yetki=:yetki and password=:password");
    $adminsor->execute(array(
        'email' => $kullanici_email,
        'yetki' => 1,
        'password' => $kullanici_password
            
        ));

        
	$say=$kullanicisor->rowCount();
    $say2=$adminsor->rowCount();

    if($say==1){
        $_SESSION['kullanici_email']=$kullanici_email;
        if($kullanicicek['situation']!='online'){
            $enterance=$conn->prepare("UPDATE `customers` SET 
                        situation=:situation where email=:email");
            $online=$enterance->execute(array(
                        'situation' => "online",
                        'email' => $kullanici_email
                        ));
                    }
        header("Location:loggedin_index.php?durum=ok&kullanicisil=none&deleteMessage=none");
        exit;
    }else{
        if($say2==1){
            $_SESSION['kullanici_email']=$kullanici_email;
            if($kullanicicek['situation']!='online'){
                $enterance=$conn->prepare("UPDATE `customers` SET 
                            situation=:situation where email=:email");
                $online=$enterance->execute(array(
                            'situation' => "online",
                            'email' => $kullanici_email
                            ));
                        }
            header("Location:admin_index.php?durum=ok&kullanicisil=none&deleteMessage=none");
            exit;
        }else{
            header("Location:login_register.php?durum=no_password&kullanicisil=none&deleteMessage=none");
            exit;
        }
    }
}

//Contact Us - not loggedin
if (isset($_POST['contact'])) {
    $kullanici_adi= $_POST['kullanici_adi'];
    $kullanici_email= $_POST['kullanici_email'];
    $kullanici_mesaj= $_POST['kullanici_mesaj'];
    $kullanici_phoneNumber= $_POST['kullanici_phoneNumber'];

    $contact=$conn->prepare("INSERT INTO contactus SET
                    name=:kullanici_adi,
                    Email=:kullanici_email,
                    ContactNumber=:kullanici_phoneNumber,
                    Message=:kullanici_mesaj,
                    isMember=:isMember
                    ");
        $push=$contact->execute(array(
                    'kullanici_adi' => $kullanici_adi,
                    'kullanici_email' => $kullanici_email,
                    'kullanici_phoneNumber' => $kullanici_phoneNumber,
                    'kullanici_mesaj' => $kullanici_mesaj,
                    'isMember' => 'No'
        ));
        if($push){
            header("Location:contactus.php?durum=basarili_contact&kullanicisil=none&deleteMessage=none");
        }else{
            header("Location:contactus.php?durum=basarisiz_contact&kullanicisil=none&deleteMessage=none");
        }
                    
}

//Contact Us-loggedin
if (isset($_POST['contact_loggedin'])) {
    $kullanici_adi= $_POST['kullanici_adi'];
    $kullanici_email= $_POST['kullanici_email'];
    $kullanici_mesaj= $_POST['kullanici_mesaj'];
    $kullanici_phoneNumber= $_POST['kullanici_phoneNumber'];

    $contact=$conn->prepare("INSERT INTO contactus SET
                    name=:kullanici_adi,
                    Email=:kullanici_email,
                    ContactNumber=:kullanici_phoneNumber,
                    Message=:kullanici_mesaj,
                    isMember=:isMember
                    ");
        $push=$contact->execute(array(
                    'kullanici_adi' => $kullanici_adi,
                    'kullanici_email' => $kullanici_email,
                    'kullanici_phoneNumber' => $kullanici_phoneNumber,
                    'kullanici_mesaj' => $kullanici_mesaj,
                    'isMember' => 'Yes'
        ));
        if($push){
            header("Location:loggedin_contactus.php?durum=basarili_contact_loggedin&kullanicisil=none&deleteMessage=none");
        }else{
            header("Location:loggedin_contactus.php?durum=basarisiz_contact_loggedin&kullanicisil=none&deleteMessage=none");
        }
                    
}

//Kayıt olma 
if(isset($_POST['signup'])){
    $kullanici_email= $_POST['email'];
    $kullanici_phoneNumber= $_POST['phoneNumber'];
    $kullanici_password=$_POST['password'];
    $kullanici_confirmPassword=$_POST['confirmPassword'];
    $kullanici_firstname= $_POST['firstname'];
    $kullanici_surname= $_POST['surname'];


    if($kullanici_password == $kullanici_confirmPassword){
        if(strlen($kullanici_password)>=6){
            $kullanicisor=$conn->prepare("SELECT * FROM customers WHERE email=:email");
            $kullanicisor->execute(array(
                'email' => $kullanici_email
            ));
            $count=$kullanicisor->rowcount();

            if($count==0){
                
                $kullanici_yetki=0;

                $register=$conn->prepare("INSERT INTO customers SET
                    email=:kullanici_email,
                    firstname=:kullanici_firstname,
                    surname=:kullanici_surname,
                    password=:kullanici_password,
                    phoneNumber=:kullanici_phoneNumber,
                    yetki=:kullanici_yetki
                    ");
                $insert=$register->execute(array(
                    'kullanici_email' => $kullanici_email,
                    'kullanici_surname' => $kullanici_surname,
                    'kullanici_phoneNumber' => $kullanici_phoneNumber,
                    'kullanici_firstname' => $kullanici_firstname,
                    'kullanici_password' => $kullanici_password,
                    'kullanici_yetki' => $kullanici_yetki,

                ));

                if($insert){
                    header("Location:login_register.php?durum=basarilikayit&kullanicisil=waiting&deleteMessage=waiting");
                }else{
                    header("Location:signup.php?durum=basarisiz&kullanicisil=waiting&deleteMessage=waiting");
                }


            }else{
                header("Location:signup.php?durum=kayitli&kullanicisil=waiting&deleteMessage=waiting");
            }

        }else{
            header("Location:signup.php?durum=eksiksifre&kullanicisil=waiting&deleteMessage=waiting");
        }

    }else{
        header("Location:signup.php?durum=farklisifre&kullanicisil=waiting&deleteMessage=waiting");
    }
}


//Admin- Kullanici düzenle
if (isset($_POST['kullaniciduzenle'])) {
    islemKontrol();

	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$conn->prepare("UPDATE customers SET
		phoneNumber=:phoneNumber,
		yetki=:yetki,
		situation=:situation,
        firstname=:firstname,
        surname=:surname
		WHERE id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'firstname' => $_POST['firstname'],
		'surname' => $_POST['surname'],
		'situation' => $_POST['situation'],
        'yetki' => $_POST['authority'],
        'phoneNumber' => $_POST['phoneNumber']
		));


	if ($update) {

		Header("Location:admin_edit_customers.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:admin_edit_customers.php?kullanici_id=$kullanici_id&durum=no");
	}

}

//Admin- Kullanıcı Sil
if ($_GET['kullanicisil']=="ok") {
    islemKontrol();
	$delete=$conn->prepare("DELETE from customers where id=:id");
	$control=$delete->execute(array(
		'id' => $_GET['kullanici_id']
		));


	if ($control) {


		header("location:admin_customers.php?sil=ok&durum=ok");


	} else {

		header("location:admin_customers.php?sil=no&durum=no");

	}


}


//Admin- Mesaj Silme
if ($_GET['deleteMessage']=="ok") {
    islemKontrol();
	$delete=$conn->prepare("DELETE from contactus where id=:id");
	$control=$delete->execute(array(
		'id' => $_GET['kullanici_id']
		));
	if ($control) {
		header("location:admin_messages.php?deleteMessage=successfull_deleteMessage");
	} else {
		header("location:admin_messages.php?deleteMessage=error_deleteMessage");
	}


}

//UserAccount- Bilgileri Düzenleme
if (isset($_POST['bilgi_duzenleme'])) {
    $kullanici_id=$_SESSION['kullanici_id'];
	$ayarkaydet=$conn->prepare("UPDATE customers SET
		phoneNumber=:phoneNumber,
        firstname=:firstname,
        surname=:surname
		WHERE id=:id");

    if(strlen($_POST['phoneNumber']) == 10){
	$update=$ayarkaydet->execute(array(
		'firstname' => $_POST['firstname'],
		'surname' => $_POST['surname'],
        'phoneNumber' => $_POST['phoneNumber'],
        'id' => $kullanici_id
		));


	    if ($update) {
		    Header("Location:user_account.php?durum=bilgi_duzenlendi");

	    } else {

		    Header("Location:user_account.php?durum=bilgi_duzenlenemedi");
	    }

    }else{
        Header("Location:user_account.php?durum=gecersiz_phoneNumber");
    }
}

//UserAccount- Şifre Değiştirme

if (isset($_POST['sifre_degistirme'])) {
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



//Not Loggedin- Şifre Değiştirme
if (isset($_POST['not_loggedin_change_password'])) {
    $kullanici_password=$_POST['password1'];
    $kullanici_confirmPassword=$_POST['password2'];
    $kullanici_email=$_POST['email'];

    if(strlen($kullanici_password) >= 6){

    
        if($kullanici_password==$kullanici_confirmPassword){
            $ayarkaydet=$conn->prepare("UPDATE customers SET
		    password=:password
		    WHERE email=:email");

	        $update=$ayarkaydet->execute(array(
		    'password' => $kullanici_password,
            'email' => $kullanici_email
		    ));
	        if($update){
		    Header("Location:forgot_password.php?durum=sifre_degisti&kullanicisil=none&deleteMessage=none");
	        }else {
		    Header("Location:forgot_password.php?durum=sifre_degistirilemedi&kullanicisil=none&deleteMessage=none");
	        }
        }else{
        header("Location:forgot_password.php?durum=farklisifre&kullanicisil=none&deleteMessage=none");
        }
    }else{
    header("Location:forgot_password.php?durum=eksiksifre&kullanicisil=none&deleteMessage=none");
    }

}



?>