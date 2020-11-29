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
               <li><a href="#">Proizvodi</a></li>
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
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/minslika1.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">MINI SLIKA</h3>
                     <p class="card-text">Mini slika s motivom - <em>lavanda</em>. Dimenzija slike je 26 x 26 cm.</p>
                     <p class="card-text">CIJENA: 30,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/minslika.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <h3 class="card-title">MINI SLIKA</h3>
                     <p class="card-text">Mini slika s motivom - <em>galeb</em>. Dimenzija slike je 26 x 26 cm.</p>
                     <p class="card-text">CIJENA: 30,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/minslika2.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">MINI SLIKA</h3>
                     <p class="card-text">Mini slika s motivom - <em>kuća uz more</em>. Dimenzija slike je 26 x 26 cm.</p>
                     <p class="card-text">CIJENA: 30,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/kljuc.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">KUĆICA ZA KLJUČEVE</h3>
                     <p class="card-text">Drvena kućica s kukicama za držanje ključeva s motivom - <em>crni leptir</em>.</p>
                     <p class="card-text">CIJENA: 60,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/kljuc1.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <h3 class="card-title">KUĆICA ZA KLJUČEVE</h3>
                     <p class="card-text">Drvena kućica s kukicama za držanje ključeva s motivom - <em>fashion boutique</em>.</p>
                     <p class="card-text">CIJENA: 60,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/kljuc2.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">KUĆICA ZA KLJUČEVE</h3>
                     <p class="card-text">Drvena kućica s kukicama za držanje ključeva s motivom - <em>suncokreti</em>.</p>
                     <p class="card-text">CIJENA: 60,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/kuhaca.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">KUHAČA S MOTIVOM</h3>
                     <p class="card-text">Drvena kuhača s različitim otiskanim motivima.</p>
                     <p class="card-text">CIJENA: 50,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/magime.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <h3 class="card-title">MAGNET S IMENOM</h3>
                     <p class="card-text">Magnet u obliku srca s ispisanim imenom. Boja srca i slova po želji.</p>
                     <p class="card-text">CIJENA: 25,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/srcemagnet.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">MAGNET S NATPISOM</h3>
                     <p class="card-text">Crveni magnet u obliku srca s prigodnim natpisom po želji.</p>
                     <p class="card-text">CIJENA: 30,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/mac.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENI MAČ</h3>
                     <p class="card-text">Drveni mačevi s različitim ukrasnim detaljima.</p>
                     <p class="card-text">CIJENA: 35,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/lukstr.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <h3 class="card-title">DRVENI LUK I STRIJELA</h3>
                     <p class="card-text">Drveni luk i strijela s ukrasnim detaljima.</p>
                     <p class="card-text">CIJENA: 60,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/tomahawk.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENI TOMAHAWK</h3>
                     <p class="card-text">Drveni tomahawk s ukrasnim detaljima.</p>
                     <p class="card-text">CIJENA: 40,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/boca.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">BOCA S MOTIVOM</h3>
                     <p class="card-text">Staklena boca s raznim motivima napravljenim decoupage tehnikom.</p>
                     <p class="card-text">CIJENA: 30,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/dizalica.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <br>
                     <h3 class="card-title">DRVENA DIZALICA</h3>
                     <p class="card-text">Drvena dizalica dolazi u dijelovima. Sastavljate ju samostalno prema nacrtu koji dolazi uz dizalicu.</p>
                     <p class="card-text">CIJENA: 120,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/slova.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENA SLOVA U BOJAMA</h3>
                     <p class="card-text">Drvena slova u različitim bojama.</p>
                     <p class="card-text">CIJENA: 5,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/kime.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENA KUTIJA S IMENOM</h3>
                     <p class="card-text">Drvena kutija s imenom. Dostupna u 3 veličine - mala, srednja, velika.</p>
                     <p class="card-text">CIJENA: 30,00 - 80,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <br><br><br>
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/kmotiv.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENA KUTIJA S UKRASNIM MOTIVIMA</h3>
                     <p class="card-text">Drvena kutija s različitim ukrasnim motivima. Dostupna u 3 veličine - mala, srednja, velika.</p>
                     <p class="card-text">CIJENA: 25,00 - 60,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/ploca.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <h3 class="card-title">DRVENA PLOČA S IMENOM</h3>
                     <p class="card-text">Drvena ploča s imenom i ukrasnim detaljima.</p>
                     <p class="card-text">CIJENA: 45,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-sm-4">
               <div class="card border-secondary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/zekozeleni.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENI USKRSNI ZEKO - zelena mašna</h3>
                     <p class="card-text">Idealan poklon za blagdane. Ovaj ukras dolazi s naslonom i visine je 38,5 cm.</p>
                     <p class="card-text">CIJENA: 50,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card border-primary" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/zekorozi.jpg" alt="Card image cap">
                  <div class="card-body border: secondary">
                     <h3 class="card-title">DRVENI USKRSNI ZEKO - roza mašna</h3>
                     <p class="card-text">Idealan poklon za blagdane. Ovaj ukras dolazi s naslonom i visine je 38,5 cm.</p>
                     <p class="card-text">CIJENA: 50,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card bg-dark" style="width: 18rem;">
                  <img class="card-img-top img-fluid img-thumbnail" src="images/proizvodi/zekozuti.jpg" alt="Card image cap">
                  <div class="card-body">
                     <h3 class="card-title">DRVENI USKRSNI ZEKO - žuta mašna</h3>
                     <p class="card-text">Idealan poklon za blagdane. Ovaj ukras dolazi s naslonom i visine je 38,5 cm.</p>
                     <p class="card-text">CIJENA: 50,00 kn</p>
                     <a href="kontakt.php" class="btn btn-primary">Kontaktiraj nas!</a>
                  </div>
               </div>
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