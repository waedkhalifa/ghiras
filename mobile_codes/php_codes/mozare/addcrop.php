<?php

$db=mysqli_connect('localhost','root','','mozare');
if(!$db){
    echo 'Database connection error'.$db->error_no;
}

$name=$_POST['name'];
$price=$_POST['price'];
$image=utf8_decode($_POST['image']);
$image2=base64_decode($_POST['image']);
$imagename=$_POST['imagename'];
 echo "$imagename";

$sql = "INSERT INTO crops SET name = '$name',price='$price',image = '$image',imagename='$imagename'";

$res = mysqli_query($db, $sql);

if($res){
    //write success
    echo "Success";
    file_put_contents("upload\\".$imagename,$image2 );
 $path = 'C:\\dev\\mozare\\images\\'.$imagename;
    file_put_contents($path,$image2);
}
mysqli_close($db);
header('Content-Type: application/json');

return;

?>