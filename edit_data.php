<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
  require_once 'koneksi.php'; 
  header('Content-Type: application/json');


   $response = array();
   $nama = addslashes(trim($_POST['nama']));
	 $id = addslashes(trim($_POST['id']));

   //var_dump($nama." ".$id);
   
   
$query1 = "UPDATE nama_tamus SET nama='$nama'  WHERE id='$id'";

	          
  
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

} else {
  echo json_encode(array("kode" => 0, "pesan"=>"method salah"),JSON_PRETTY_PRINT);
}


