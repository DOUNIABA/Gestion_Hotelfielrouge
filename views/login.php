<?php 
 if(isset($_POST['Admin'])){
  $newuser = new AdminController();
  $users = $newuser->login();

 }
 if(isset($_POST['Client'])){
  $client = new ClientController();
  $client = $client->login();

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
    <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

</head>

<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <div class="text" style="background:URL('./views/assets/images/images.jpg');">
          <span class="text-1">Chaque nouveau ami est une <br> Nouvelle Aventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <div class="text">
          <span class="text-1" text-dark>Complete miles of journey <br> with one step</span>
          <span class="text-2">On commence</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
                  <div class="login-form">
            <div class="title">Se connecter</div>
          <form action="" method="POST" data-parsley-validate>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email"data-parsley-type="email" data-parsley-trigger="change"	required >
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password"name="password" placeholder="Enter your password" data-parsley-trigger="change" required  >
              </div>
              
              <div class="button input-box" ><a href="admin">
                <input type="submit" value="Admin" name="Admin"style="width=100px;"></a>
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Client" name="Client">
              </div>
              
              <div class="button input-box">
                <input type="submit" value="Sumbit" name="login">
              </div>
              <div class="text sign-up-text">Vous n'avez pas un compte? <a href="signup">S'inscrire maintenant</label></div>
            </div>
        </form>
      </div>
      </div>
  </div>
</body>
</html>       
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type=" text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>