<?php
if (isset($_POST['ajouter'])) {
  $newUser = new UserController();
  $newUser->registrer();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/assets/css/style1.css"/>
</head>
<body>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <div class="text" style="background:URL('./views/assets/images/images.jpg')  ;">
          <span class="text-1"> Chaque nouveau ami est une <br> Nouvelle Aventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <div class="text">
          <span class="text-1" text-dark>Complete miles of journey <br>avec une seule étapep</span>
          <span class="text-2">On commence</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
        <div class="signup-form">
          <div class="title">S'inscrire</div>
        <form action="" method="POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box"> 
                <input type="submit" value="Sumbit" name="ajouter">
              </div>
              <div class="text sign-up-text">Vous avez déja un compte?<a href="login">Se connecter maintenant</a></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>