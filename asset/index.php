<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home !</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <header class="cd__intro">
     </header>
     <main class="cd__main">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container-fluid">
   <a class="navbar-brand" href="/index.html">CCatX</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
        <button onclick="document.getElementById('id01').style.display='block'">Register</button>
      </li>
     </ul>
   </div>
 </div>
</nav>
</main>


<!----SIGN IN FORM ----->

<div id="id01" class="modal">
<form class="modal-content" action="process-signup.php" method="post" id="signup" novalidate>
<div class="container">
  <h1>Sign Up</h1>
  <p>Please fill the fields to create an account.</p>
  <hr>
  <label for="email"><b>Email</b></label>
  <input type="text" placeholder="Enter Email" name="email" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>

  <label for="psw-repeat"><b>Repeat Password</b></label>
  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
  
  <label>
    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
  </label>

  <p>By creating an account you agree to our <a href="#" style="color:rgb(191, 30, 255)">Terms & Privacy</a>.</p>

  <div class="clearfix">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <button type="submit" class="signupbtn">Sign Up</button>
  </div>
</div>
<footer>Already a member? <a href="login.php">Login here</a></footer>
</form>
</div>
</main>

<!------------------------->

<div class="bg">
    <br>
    <h4>You may ask wtf is this</h4>
    A: Lemme answer you my dearest.
    <br>This is a gimmick of CuriousCat, since
    the devs aren't gonna update this, i decided
    to code this and hopefully update it eventually.
    <br>All my homies hate PHP.
</div>

<footer class="cd__credit">
</footer>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
<!-- Script JS -->
<script src="js.js"></script>
<!--$%analytics%$-->     
</body>
</html>