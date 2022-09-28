<?php


?>

<!DOCTYPE>

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
            <a class="nav-link text-light" href="#">Bestellen</a>
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

</div>
<div class="container">

    <div>
        <div class="col-4">
          <h2> Klantgegevens </h2>
        </div>
    </div>

    <form action="besteld.php" method="post">
        <div class="form-group mt-3">
            <label for="ingredients">Voornaam</label>
            <input type="" class="form-control"  name="voornaam" placeholder="Voornaam">

        </div>
        <div class="form-group mt-3">
            <label for="">Achternaam</label>
            <input type="text" class="form-control"  name="achternaam" placeholder="Achternaam">
        </div>
        <div class="form-group mt-3">
            <label for="">Email address</label>
            <input type="email" class="form-control"  name="e-mail" placeholder="Enter email">

        </div>
        <div class="form-group mt-3">
            <label for="">Adres</label>
            <input type="text" class="form-control" name="address" placeholder="Adres">
        </div>

        <div class="form-group mt-3">
            <label for="">Postcode</label>
            <input type="email" class="form-control"  name="postcode" placeholder="Postcode">

        </div>
        <div class="form-group mt-3">
            <label for="">Woonplaats</label>
            <input type="text" class="form-control" name="woonplaats" placeholder="Woonplaats">
        </div>

        <input  class="btn btn-dark  mt-4" type="submit" value="Ga Naar Sushis">



    </form>
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
