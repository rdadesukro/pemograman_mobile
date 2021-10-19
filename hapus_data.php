<?php

  require_once 'koneksi.php'; 
  header('Content-Type: application/json');


    $response = array();
  	$id = addslashes(trim($_POST['id']));
    $query1 = "DELETE FROM `nama_tamus` WHERE `nama_tamus`.`id` = '$id'";
	          
  
     if(mysqli_query($konek,$query1)) {
       $response["kode"] = "1";
       $response["message"] = "Sukses Hapus Data";
       echo json_encode($response,JSON_PRETTY_PRINT);
     } else {
       $response["kode"] = "0";
       $response["message"] = "gagal Hapus data";
       echo json_encode($response,JSON_PRETTY_PRINT);
     }
	
       mysqli_close($konek);
