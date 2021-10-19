
<?php 

if($_SERVER['REQUEST_METHOD']=='POST') {
require_once 'koneksi.php'; 

$query = "SELECT * FROM `nama_tamus`";
$result = mysqli_query($connect,$query);

while($row = mysqli_fetch_object($result))
{
   $data[] = $row;
}   
 
    if($data){
              $response = array(
               'status' => 1,
               'message' =>'Success',
               'data' => $data);               
    }else {
                $response=array(
               'status' => 0,
               'message' =>'No Data Found');
    }


} else {
  $response=array(
    'status' => 0,
    'message' =>'Method salah');
}
header('Content-Type: application/json');
echo json_encode($response);

?>