<?php
session_start();

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

$name = "";
$surname = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'gallery_accounts');

if (isset($_POST['registracija'])) {
  $name = mysqli_real_escape_string($db, $_POST['fname']);
  $surname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['psw']);
  $password_2 = mysqli_real_escape_string($db, $_POST['psw-repeat']);


  if (empty($name)) { array_push($errors, "Ime je potrebno."); }
  if (empty($surname)) { array_push($errors, "Prezime je potrebno."); }
  if (empty($email)) { array_push($errors, "Email je potreban."); }
  if (empty($password_1)) { array_push($errors, "Lozinka je potrebna."); }
  if ($password_1 != $password_2) { array_push($errors, "Lozinke nisu iste."); }
  if (($password_1 === $password_2) && (strlen($password_1) < 5) ) { array_push($errors, "Lozinka je prekratka."); }
  

  $user_check_query = "SELECT * FROM accounts WHERE Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['Email'] === $email) {
      array_push($errors, "Korisnik već postoji.");
    }

  if (count($errors) == 0) {

  	$query = "INSERT INTO accounts (Name, Surname, Email, Password) 
  			  VALUES('$name', '$surname', '$email', '$password_1')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "Logirani ste!";
    $logiran = 1;
  	header('location: index.php');
  }
}


if (isset($_POST['prijava'])) {
  $email = mysqli_real_escape_string($db, $_POST['emailPrijava']);
  $password = mysqli_real_escape_string($db, $_POST['pswPrijava']);

  if (empty($email)) {
      array_push($errors, "Email je potreban.");
  }
  if (empty($password)) {
      array_push($errors, "Lozinka je potrebna.");
  }

  if (count($errors) == 0) {
      $query = "SELECT * FROM accounts WHERE Email='$email' AND Password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "Logirani ste!";
        $logiran = 1;
        header('location: index.php');
      }else {
          array_push($errors, "Molimo unesite ispravne podatke.");
      }
  }
}

if (isset($_POST['odjava'])) {
  session_unset();
  session_destroy();
  header('location: index.php');
}  
?>