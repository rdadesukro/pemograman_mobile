<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
  require_once 'koneksi.php'; 
  

   $response = array();
   $nama = trim($_POST['nama']);
	 $alamat = trim($_POST['alamat']);

   //var_dump($nama." ".$id);
   
   
$query1 = "INSERT INTO `nama_tamus` (`id`, `nama`, `alamat`, `uuid`) VALUES (NULL, '$nama', '$alamat', 'qe3')";

	          
     if(mysqli_query($connect,$query1)) {
       $response = array(
        'status' => 1,
        'message' =>'Success');           
     } else {
      $response = array(
        'status' => 0,
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


