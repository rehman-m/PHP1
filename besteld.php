<?php

?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="#">ZUZU</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="sushi.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="contact.php">Bestellen</a>
        </li>

    </ul>

</div>
<div class= "container-fluid">
    <div>
        <div class="col-12">
            <img src="imgs/sushi-36.jpg" height= 25% width=100%>
        </div>
    </div>
</div>

<div class="container">

    <div>
        <div class="col-4">
            <h2> Klantgegevens </h2>
        </div>
    </div>
    <?php
session_start();

    $firstname= $_SESSION['voor'];
    $_SESSION['voor']  = $_POST['voor'];

    $lastname= $_SESSION['achter'];
    $_SESSION['achter']=$_POST['achter'];


    $adres= $_SESSION['adres'];
    $_SESSION['adres']=$_POST['adres'];


    $email=$_SESSION['email'];
    $_SESSION['email']=$_POST['email'];


    $post= $_SESSION['postcode'];
    $_SESSION['postcode']=$_POST['postcode'];

    $city= $_SESSION['staad'];
    $_SESSION['staad']=$_POST['staad'];

    $host = "localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="zuzu";


    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if($conn->connect_error){
        die('Connection failed: '. $conn->connect_error);
    } else {
        $stmt= $conn-> prepare("insert into zuzu(firstName, lastName ,adres, email, post, city)
values(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$firstname ,$lastname ,$adres,$email,$post,$city);
        $stmt-> execute();
        echo "<h3>"."(Successfull)"."</h3>";
        $stmt->close();
        $conn->close();
    }
    ?>

<?php



$firstname=$_POST['voor'];

$lastname=$_POST['achter'];
$adres=$_POST['adres'];
$email=$_POST['email'];
$post=$_POST['postcode'];
$city=$_POST['staad'];

echo "<h5>".$firstname."</h5>" ."<br>"."<h5>".$lastname."</h5>"."<br>". "<h5>"."$adres"."</h5>"
    ."<br>". "<h5>".$email."</h5>"."<br>". "<h5>"."$post"."</h5>"."<br>". "<h5>"."</h5>";




?>



</div>
<div class="container-fluid bg-black  p-5 ">
    <div class="row">
        <div class="col-7 text-light ms-5">
            <p>Contact gegevens</p>
            <p>Restaurant ZUZU</p>
            <p>Appelstraat 4 </p>
            <p>1111AA FRUIT</p>
            <p>ZUZU@gmail.com</p>
            <p>06-465545</p>

        </div>
        <div class="col-4 text-light ms-5">
            <p>Openingstijden</p>
            <p>Maandag: Gesloten</p>
            <p>Dinsdag : 16:00-22:00</p>
            <p>Woensdag : 16:00-22:00</p>
            <p>Donderdag : 16:00-22:00</p>
            <p>Vrijdag : 15:00-22:00</p>
            <p>Zaterdag : 15:00-22:00</p>
            <p>Vrijdag : Gesloten</p>

        </div>
        </div>

    </div>


</div>

</body>
</html>

<?php





