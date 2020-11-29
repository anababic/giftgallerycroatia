<?php include('server.php'); 

if (isset($_SESSION['email'])) {
  $proizvodi = "proizvodi.php";
  $proizvodiText = "Proizvodi";
  $registriraj = "";
  $registrirajText = "";
  $prijavi = "account.php";
  $prijaviText = "Račun";
}
else {
  $proizvodi = "";
  $proizvodiText = "";
  $registriraj = "signup.php";
  $registrirajText = "Registriraj se";
  $prijavi = "login.php";
  $prijaviText = "Prijavi se";
}
?>

<!DOCTYPE html>  
<html lang="hr">
   <head>
      <title>Gift Gallery Croatia</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <ul class="nav navbar-nav">
               <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
               <li><a href=<?php echo $proizvodi ?>><?php echo $proizvodiText ?></a></li>
               <li><a href="onama.php">O nama</a></li>
               <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href=<?php echo $registriraj ?>><?php echo $registrirajText ?></a></li>
               <li><a href=<?php echo $prijavi ?>><?php echo $prijaviText ?></a></li>
               <li><a href="https://www.facebook.com/giftgalleryhr"><i class="fa fa-facebook"></i></a></li>
               <li><a href="mailto:suveniri.djelatovic@gmail.com"><span class="glyphicon glyphicon-envelope"></span> suveniri.djelatovic@gmail.com</a></li>
            </ul>
         </div>
      </nav>
      <div class="container">
         <div style="text-align:center">
            <h2>KONTAKTIRAJTE NAS</h2>
            <p>Potrudit ćemo se odgovoriti na e-mail ili javiti u najkraćem mogućem roku!</p>
         </div>
         <div style="text-align:center" class="row">
            <p><br>Gift Gallery Croatia, trgovina i izrada suvenira<br><br>
               E-mail:<a href="mailto:suveniri.djelatovic@gmail.com"> suveniri.djelatovic@gmail.com</a><br><br>
               Facebook: <a href="https://www.facebook.com/giftgalleryhr">Gift Gallery Croatia</a><br><br>
               Tel: 091 560 5283
            </p>
            <img src="images/naslovna.png" class="img-rounded" style="width:50%">
         </div>
      </div>
      <footer class="container-fluid text-center">
         <p>© 2020 Web programiranje - Ana Babić<br>
            <a href="mailto:ababic@etfos.hr">ababic@etfos.hr</a>
         </p>
      </footer>
   </body>
</html>