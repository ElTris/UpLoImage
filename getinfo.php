<?php
$user="admin";
$password="qwerty";
$host="localhost";
$db_name="user_db";
$con=mysqli_connect($host,$user,$password,$db_name);
$sql="select * from user_info;";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
  $row= mysqli_fetch_assoc($result);
  echo json_encode(array("Name"=>$row["nombre"],"Email"=>$row["email"],"Mobile"=>$row["mobile"]));
}
 ?>
