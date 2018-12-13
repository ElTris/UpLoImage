<?php
$image = $_POST["image"];
$name = $_POST["name"];
$nameDirectory = $_POST["nameDirectory"];
$upload_path = "uploads/$nameDirectory/$name.jpg";
$route = "uploads/$nameDirectory";

    if (!file_exists($route)) {
    system("mkdir $route");
      file_put_contents($upload_path,base64_decode($image));
      echo json_encode(array('response'=>'image uploaded succesfully'));
    }else{
      file_put_contents($upload_path,base64_decode($image));
      echo json_encode(array('response'=>'image uploaded succesfully'));
    }
 ?>
