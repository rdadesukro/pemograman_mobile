<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
  require_once 'koneksi.php'; 
  

   $response = array();
   $nama_tamu = trim($_POST['nama_tamu']);
	 $alamat = trim($_POST['alamat']);
   $no_telpon = trim($_POST['no_telpon']);

   //var_dump($nama." ".$id);
   
   
$query1 = "INSERT INTO `tamu` (`id`, `nama_tamu`, `alamat`, `no_telpon`) VALUES (NULL, '$nama_tamu', '$alamat', '$no_telpon')";

	          
     if(mysqli_query($connect,$query1)) {
       $response = array(
        'kode' => "1",
        'message' =>'Success');           
     } else {
      $response = array(
        'kode' => "0",
        'message' =>'Gagal');        
     }
	
      // mysqli_close($connect);

} else {
  $response = array(
    'status' => 0,
    'message' =>'Method salah');      
}
header('Content-Type: application/json');
echo json_encode($response)
?>


