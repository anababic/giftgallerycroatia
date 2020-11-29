<?php include('server.php'); ?>

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
      <div class="jumbotron jumbotron-fluid text-center">
         <div class="container">
            <h1>Dobro došli u <em>Gift Gallery Croatia</em></h1>
            <p>Registrirajte se, pogledajte naše proizvode i pronađite svoj savršeni personalizirani poklon!</p>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="images/prva.jpg" alt="Image">
            </div>
            <div class="item">
               <img src="images/druga.jpg" alt="Image">
            </div>
            <div class="item">
               <img src="images/treca.jpg" alt="Image">
            </div>
            <div class="item">
               <img src="images/cetvrta.jpg" alt="Image">
            </div>
            <div class="item">
               <img src="images/peta.jpg" alt="Image">
            </div>
         </div>
         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Prethodna</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Sljedeća</span>
         </a>
      </div>
      <br>
      <div class="container-fluid text-center">
         <div class="row">
            <div class="col-sm-4">
               <h2>Tko smo mi?</h2>
               <p><em><b>Gift Gallery Croatia</b></em> obiteljski je obrt za proizvodnju i dizajn ručno rađenih poklona i suvenira. 
                  Obitelj Đelatović iz Đakova već godinama koristi svoj talent i kreativnost za stvaranje personaliziranih poklona. 
               </p>
               <br>
               <img src="images/dva.jpg" class="img-rounded" width="100%"  alt="Image">
            </div>
            <div class="col-sm-4">
               <h2>Čime se bavimo?</h2>
               <p>
                  Nudimo ručno rađene personalizirane poklone i suvenire uz mogućnost izrade po želji. 
                  Omogućavamo ispisivanje imena na ukrasne kutije, magnete, pločice.
                  Sve naše proizvode moguće je izraditi s različitim motivima - zbog toga je svaki naš proizvod <em><b>jedinstven</b></em>.
               </p>
               <br>
               <img src="images/naslovna.png" class="img-circle" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
               <h2>Gdje nas možete pronaći?</h2>
               <p>Još uvijek radimo na otvaranju vlastite fizičke trgovine u Đakovu u kojoj bi svi naši proizvodi dobili svoje mjesto na polici. 
                  Do tada možete pronaći naš štand na <b>svim većim događanjima i sajmovima</b> diljem <em>Lijepe Naše</em>.
               </p>
               <br>
               <img src="images/stand.jpg" class="img-rounded" style="width:100%" alt="Image">
            </div>
         </div>
      </div>
      <footer class="container-fluid text-center fixed-bottom">
         <p>© 2020 Web programiranje - Ana Babić<br>
            <a href="mailto:ababic@etfos.hr">ababic@etfos.hr</a>
         </p>
      </footer>
   </body>
</html>