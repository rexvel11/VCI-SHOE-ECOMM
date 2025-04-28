<?php 
@include 'db.php'; 
session_start(); // Start the session
$message = ''; // To hold success/error messages
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="index.css" />
</head>
<body>

<div class="wrapper">
  <div class="title-text">
    <div class="title login">Login</div>
    <div class="title signup">Signup</div>
  </div>
  <div class="form-container">
    <div class="slide-controls">
      <input type="radio" name="slide" id="login" <?php if(isset($_POST['login'])) echo 'checked'; ?> />
      <input type="radio" name="slide" id="signup" <?php if(isset($_POST['signup'])) echo 'checked'; ?> />
      <label for="login" class="slide login">Login</label>
      <label for="signup" class="slide signup">Signup</label>
      <div class="slider-tab"></div>
    </div>
    <div class="form-inner">

      <!-- Login Form -->
      <form action="" method="post" class="login">
        <div class="field">
          <input type="text" name="username" placeholder="Username" required />
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="Password" required />
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" name="login" value="Login" />
        </div>
        <div class="signup-link">
          Don't have an account? <a href="">Signup now</a>
        </div>
      </form>

      <!-- Signup Form -->
      <form action="" method="post" class="signup">
        <div class="field">
          <input type="text" name="signup_username" placeholder="Username" required />
        </div>
        <div class="field">
          <input type="email" name="signup_email" placeholder="Email" required />
        </div>
        <div class="field">
          <input type="password" name="signup_password" placeholder="Password" required />
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" name="signup" value="Signup" />
        </div>
      </form>

    </div>
  </div>
</div>

<?php
// Handle Signup
if (isset($_POST['signup'])) {
    $signup_username = mysqli_real_escape_string($conn, $_POST['signup_username']);
    $signup_email = mysqli_real_escape_string($conn, $_POST['signup_email']);
    $signup_password = mysqli_real_escape_string($conn, $_POST['signup_password']);

    // Simple password hashing for security
    $hashed_password = password_hash($signup_password, PASSWORD_DEFAULT);

    // Check if email already exists
    $check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$signup_email'");
    if (mysqli_num_rows($check_email) > 0) {
        $message = 'Email already registered!';
    } else {
        $insert = mysqli_query($conn, "INSERT INTO users(username, email, password) VALUES('$signup_username', '$signup_email', '$hashed_password')");
        if ($insert) {
            $message = 'Signup successful! Please login.';
            echo "<script>
              document.getElementById('login').checked = true;
              alert('$message');
            </script>";
        } else {
            $message = 'Signup failed. Please try again.';
        }
    }
}

// Handle Login
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            if ($username == 'admin') {
                header('Location: admin.php');
                exit();
            } else {
                header('Location: home.php');
                exit();
            }
        } else {
            echo "<script>alert('Incorrect password!');</script>";
        }
    } else {
        echo "<script>alert('Username not found!');</script>";
    }
}
?>

<script>
// JavaScript to handle form slide manually if signup was successful
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");

signupBtn.onclick = () => {
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
};

loginBtn.onclick = () => {
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
};

signupLink.onclick = () => {
  signupBtn.click();
  return false;
};
</script>

</body>
</html>
