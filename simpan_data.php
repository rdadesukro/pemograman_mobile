<?php

  require_once 'koneksi.php'; 
  header('Content-Type: application/json');


   $response = array();
   $nama = addslashes(trim($_POST['nama']));
	 $alamat = addslashes(trim($_POST['alamat']));

   //var_dump($nama." ".$id);
   
   
$query1 = "INSERT INTO `nama_tamus` (`id`, `users_id`, `nama`, `alamat`, `uuid`, `created_at`, `updated_at`, `baca`) VALUES (NULL, '1', 'ade', 'ade', '23213', '2021-07-01 11:45:46', '2021-07-01 11:45:46', '1');";

	          
  
     if(mysqli_query($konek,$query1)) {
       $response["kode"] = "1";
       $response["message"] = "Sukses Ganti Nomor";
       echo json_encode($response,JSON_PRETTY_PRINT);
     } else {
       $response["kode"] = "0";
       $response["message"] = "gagal edit data";
       echo json_encode($response,JSON_PRETTY_PRINT);
     }
	
       mysqli_close($konek);
