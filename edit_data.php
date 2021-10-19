<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
  require_once 'koneksi.php'; 
  

   $response = array();
   $nama = addslashes(trim($_POST['nama']));
	 $id = addslashes(trim($_POST['id']));

   //var_dump($nama." ".$id);
   
   
$query1 = "UPDATE nama_tamus SET nama='$nama'  WHERE id='$id'";

	          
     if(mysqli_query($connect,$query1)) {
       $response = array(
        'status' => 1,
        'message' =>'Success');           
     } else {
      $response = array(
        'status' => 0,
        'message' =>'Gagal');        
     }
	
       mysqli_close($connect);

} else {
  $response = array(
    'status' => 0,
    'message' =>'Method salah');      
}
header('Content-Type: application/json');
echo json_encode($response)
?>


