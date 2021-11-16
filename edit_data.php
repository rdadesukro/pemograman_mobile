<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
  require_once 'koneksi.php'; 
  

  $response = array();
  $nama_tamu = addslashes(trim($_POST['nama_tamu']));
  $alamat = addslashes(trim($_POST['alamat']));
  $no_telpon = addslashes(trim($_POST['no_telpon']));
	$id = addslashes(trim($_POST['id']));
  

   
$query1 = "UPDATE tamu SET nama_tamu='$nama_tamu',alamat='$alamat',no_telpon='$no_telpon'  WHERE id='$id'";

	          
     if(mysqli_query($connect,$query1)) {
       $response = array(
        'kode' => "1",
        'message' =>'Success');           
     } else {
      $response = array(
        'kode' => "0",
        'message' =>'Gagal');        
     }
	
       mysqli_close($connect);

} else {
  $response = array(
    'kode' => "0",
    'message' =>'Method salah');      
}
header('Content-Type: application/json');
echo json_encode($response)
?>


