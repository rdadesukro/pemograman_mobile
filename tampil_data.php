
<?php 

if($_SERVER['REQUEST_METHOD']=='POST') {
require_once 'koneksi.php'; 
header('Content-Type: application/json');


$query = "SELECT * FROM `nama_tamus`";
$result = mysqli_query($konek,$query);
$array = array();

while ($row  = mysqli_fetch_assoc($result))
{
	$array[] = $row; 
}

echo ($result) ? 
json_encode(array("kode" => 1, "result"=>$array),JSON_PRETTY_PRINT) :
json_encode(array("kode" => 0, "pesan"=>"data tidak ditemukan"));


} else {
  echo json_encode(array("kode" => 0, "pesan"=>"method salah"),JSON_PRETTY_PRINT);
}


