<?php 
    // echo "test php" ;

    $name = "zakaria" ;
    echo "my name is $name";



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styleLoginEspaceEtud.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
 
  </style>
</head>
<body>
  <header>
    <a href="index.html"><img src="assets/logon.png" alt=""></a>
    <a href="espaceEtudiant2.html">dashTest</a>

  </header>
  
    <div class="container">
        <div class="FirstNes"> 
        </div>

        <div class="login-container">

            <form id="loginForm">
                <h2>Indiquez votre compte</h2>
              <label for="username">N* Telephone :</label>
              <input type="number" id="username" name="username" placeholder="entrer votre numero de telephone" required>
              
              <label for="password">Password :</label>
              <input type="password" id="password" name="password" placeholder="votre Mot de passe" required>
              
              <button type="button" onclick="validateForm()">Login</button>
              <p id="error-message"></p>
            </form>
          </div>
          
    </div>

  
  <script src="script.js"></script>
</body>
</html>