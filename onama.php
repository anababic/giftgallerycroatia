<?php include('server.php') ?>

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
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <h2>O NAMA</h2>
               <hr>
               <p style="text-align:justify"><br><br>
                  Gift Gallery Croatia obiteljski je obrt za proizvodnju i dizajn ručno rađenih poklona i suvenira. 
                  Obitelj Đelatović iz Đakova već godinama koristi svoj talent i kreativnost za stvaranje personaliziranih poklona za svaku priliku.<br><br>
                  Sigurno Vam se nekada dogodilo da nemate ideju što pokloniti za rođendan, godišnjicu, useljenje... Želite nešto posebno? 
                  Mi Vam nudimo personalizirane poklone i suvenire uz mogućnost izrade po želji kako bi svaki Vaš poklon bio jedinstven i poseban. 
                  S ponosom možemo reći da su svi naši proizvodi ručno rađeni s puno uloženog truda i ljubavi.<br><br>
                  Nažalost, zbog cijelokupne situacije s coronavirusom (COVID-19), još uvijek radimo na otvaranju vlastite fizičke trgovine u Đakovu u kojoj 
                  bi svi naši proizvodi dobili svoje mjesto na polici i bili dostupni za pogledati ih uživo u bilo kojem trenutku. 
                  Do tada možete pronaći naš štand na svim većim događanjima diljem Lijepe Naše i odabrati poseban poklon za nekog Vašeg <em>posebnog</em>.
               </p>
               <br>
               <h4><b>Događaji na kojima nas možete redovno pronaći:</b></h4>
               <p>
                  <a href="https://tzo-bilje.hr/event/21-ribarski-dani-u-kopacevu">Ribarski dani u Kopačevu</a><br>
                  <a href="https://www.tzosijek.hr/osjecka-ljetna-noc-650">Osječke ljetne noći</a><br>
                  <a href="https://visitgospic.com/manifestacije/41-jesen-u-lici">Jesen u Lici</a><br>
                  <a href="https://vinkovackejeseni.hr/">Vinkovačke jeseni</a><br>
                  <a href="https://visitsplit.com/hr/1204/dani-dioklecijan">Dani Dioklecijana u Splitu</a><br>
                  <a href="http://www.gospa-sinjska.hr/index.php/proslava-velike-gospe-2020">Proslava Velike Gospe u Sinju</a><br>
                  <a href="https://www.facebook.com/prosinacupuli/">Prosinac u Puli</a><br>
               </p>
            </div>
            <div class="col-sm-6">
               <img src="images/dva.jpg" class="img-responsive img-rounded" style="width:100%" alt="Image">
            </div>
         </div>
         <hr>
      </div>
      <footer class="container-fluid text-center">
         <p>© 2020 Web programiranje - Ana Babić<br>
            <a href="mailto:ababic@etfos.hr">ababic@etfos.hr</a>
         </p>
      </footer>
   </body>
</html>