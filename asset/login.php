<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Correct, welcome. " . $row['username'] . "!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
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
 </div>
</nav>
</main>
<body>
    <br>
    <div class="container">
        <h2>Log In</h2>
        <form action="login.php" method="post">
            <label for="username">User:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Log In</button>
        </form>
        <p>No account? <a href="signup.html">Sign in!</a>.</p>
    </div>
</body>
    
<footer class="cd__credit">

</footer>
<!-- Script JS -->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
<script src="js.js"></script>
</body>
</html>
