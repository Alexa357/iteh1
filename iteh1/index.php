<?php
 require "dbBroker.php";
 require "model/kupac.php";

 session_start();

 if(isset($_POST['korisnickoIme']) && isset($_POST['sifra'])) {
     $korisnickoIme=$_POST['korisnickoIme'];
     $sifra=$_POST['sifra'];

    $rs = Kupac::loginKupca($korisnickoIme, $sifra, $conn);


      if($rs->num_rows==1) {
          echo "You have successfully logged in!";
          $_SESSION['kupac_id'] = $rs->fetch_assoc()['id'];
          header('Location: home.php');
          exit();
      } else {
          //header('Location: index.php');
          echo '<script type="text/javascript">alert("You have entered incorrect password!"); 
                                                window.location.href = "http://localhost/iteh/";</script>';
          exit();
      }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico" />
    <title>Prodaja automobila</title>

</head>
<body>
    
    <div class="login-form">
    
        <div class="main-div">
            <form method="POST" action="#">
                <h1>Prodaja automobila</h1>
                <div class="imgcontainer">
                    <img src="img/2.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <input type="text" placeholder="KorisnickoIme" name="korisnickoIme" class="form-control"  required>
                    <input type="password" placeholder="Sifra" name="sifra" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>