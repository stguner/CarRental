<?php 
include 'connection.php';
ob_start();
session_start();

//Admin - Rezervasyon Sil
if ($_GET['addStock']=="deleteReservation") {
	$delete=$conn->prepare("DELETE from reservations where reservationid=:id");
	$push=$delete->execute(array(
		'id' => $_GET['reservationid']
		));
	if ($push) {
		header("location:admin_reservations.php?addStock=successfull_deleteReservation");
	} else {
		header("location:admin_cars.php?addStock=error_deleteReservation");
	}
}


//Admin - Arabaya Stok Ekleme
if ($_GET['addStock']=="increase") {
	$delete=$conn->prepare("UPDATE cars SET stock=stock+1 WHERE car_id=:carid");
	$push=$delete->execute(array(
		'carid' => $_GET['car_id']
		));
	if ($push){
		header("location:admin_cars.php?addStock=basarili_increase");
	} else {
		header("location:admin_cars.php?addStock=basarisiz_increase");
	}
}

//Admin - Arabadan Stok Çıkarma
if ($_GET['addStock']=="decrease") {
    if($_GET['stock']>0){
        $decrease=$conn->prepare("UPDATE cars SET stock=stock-1 where car_id=:carid");
	$push=$decrease->execute(array(
		'carid' => $_GET['car_id']
		));
        if ($push) {
            header("Location:admin_cars.php?addStock=basarili_decrease");
        } else {
            header("location:admin_cars.php?addStock=basarisiz_decrease");
        }
    }else{
        header("Location:admin_cars.php?addStock=zeroCar");
    }
}

//Admin - Araba Fiyatını Arttırma
if ($_GET['addStock']=="increasePrice") {
	$delete=$conn->prepare("UPDATE cars SET price=price+1 WHERE car_id=:carid");
	$push=$delete->execute(array(
		'carid' => $_GET['car_id']
		));
	if ($push){
		header("location:admin_cars.php?addStock=basarili_increase_price");
	} else {
		header("location:admin_cars.php?addStock=basarisiz_increasePrice");
	}
}

//Admin - Arabadan Stok Çıkarma
if ($_GET['addStock']=="decreasePrice") {
    if($_GET['price']>0){
        $decrease=$conn->prepare("UPDATE cars SET price=price-1 where car_id=:carid");
	$push=$decrease->execute(array(
		'carid' => $_GET['car_id']
		));
        if ($push) {
            header("Location:admin_cars.php?addStock=basarili_decrease_price");
        } else {
            header("location:admin_cars.php?addStock=basarisiz_decrease_price");
        }
    }else{
        header("Location:admin_cars.php?addStock=zeroMoney");
    }
}

?>