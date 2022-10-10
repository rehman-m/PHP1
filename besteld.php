<?php
$firstname= $_POST['voor'];
$lastname= $_POST['achter'];
$adres= $_POST['adres'];
$email=$_POST['email'];
$post= $_POST['postcode'];
$city= $_POST['staad'];


$conn=new mysqli("localhost", "root","","test");
if($conn->connect_error){
    die('Connection failed: '. $conn->connect_error);
} else {
    $stmt= $conn-> prepare("insert into regsiteration(firstName, lastName ,adres, email, post, city)
values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstname ,$lastname ,$adres,$email,$post,$city);
    $stmt-> execute();
    echo "Successfull";
    $stmt->close();
    $conn->close();
}
?>

