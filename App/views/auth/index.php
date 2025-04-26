<?php
$consentSet = isset($_COOKIE['cookie_consent']) && $_COOKIE['cookie_consent'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="../../../assets/CSS/login.css">
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
  <script type="module" src="../../controllers/login.js" defer></script>
  <title>Sign Up | Hagurash</title>
</head>

<body>
  <div class="wrapper">
    <div class="inner__wrap">
      <div class="wrap__close">
        <form class="sign-up">
          <fieldset class="fieldset">
            <div class="line"></div>
            <img src="../../../assets/images/Logo.png" alt="Hagurash logo.png">
            <h1>Sign Up</h1>
            <div class="name__input">
              <label for="userName">Name</label>
              <input class="input" type="text" name="name" autofocus id="userName" maxlength="30">
            </div>
            <div class="email__input">
              <label for="uemail">Email</label>
              <input class="input" type="text" name="email" id="uemail">
            </div>
            <div class="pass__input">
              <label for="pass">Password</label>
              <input class="input" autocomplete="" type="password" name="pass" id="pass" minlength="8" maxlength="12">
            </div>
            <input class="input" type="submit" value="Sign-Up">
            <p>Already have an account? <span class="sign-in-btn">Sign in</span></p>
          </fieldset>
        </form>
        <form action="" class="sign-in hidden">
          <fieldset class="fieldset">
            <div class="line"></div>
            <img src="../../../assets/images/Logo.png" alt="Hagurash logo.png">
            <h1>Sign In</h1>
            <div class="name__input">
              <label for="email">Email</label>
              <input class="input" type="text" autofocus name="email" id="email">
            </div>
            <div class="pass__input">
              <label for="pin">Password</label>
              <input class="input" autocomplete="" type="password" name="pass" id="pin" minlength="8" maxlength="12">
            </div>
            <?php
            echo $consentSet ? '  
            <div class="remember">
              <input type="checkbox" name="remember" value ="on" id="remember">
              <label for="remember">Remember me</label>
            </div>' : '';
            ?>
            <input class="input" type="submit" value="Sign-In">
            <p>Don't have an account? <span class="sign-up-btn">Sign Up</span></p>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</body>

</html>