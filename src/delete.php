<?php 
include('../config.php');

//lấy id

$d_id = $_GET['id'];

$sql = "delete from drugs where id = $d_id ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: index.php");
}
else
echo $sql;

?>


