<?php
$image = $_POST["image"];
$name = $_POST["name"];
$upload_path = "uploads/$name.jpg";
  file_put_contents($upload_path,base64_decode($image));
  echo json_encode(array('response'=>'image uploaded succesfully'));
 ?>
