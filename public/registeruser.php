<?php
if (isset($_POST["submit"])) {
    require 'includes/config.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pw = $_POST["pw"];
    $pw2 = $_POST["pw2"];

    if ($pw == $pw2) {
        $query = "INSERT INTO users VALUES('$username', '$email', '$pw')";
        mysqli_query($conn, $query);
        echo "<script> alert ('Registration successful!'); window.location.href = 'createpage.php'; </script>";
        exit(); // Added exit to prevent further execution
    } else {
        echo "<script> alert ('Passwords do not match!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="globals.css"/>
  <link rel="stylesheet" href="CSS/styleguide2.css"/>
  <link rel="stylesheet" href="CSS/registerpage.css"/>
  <link rel="stylesheet" href="CSS/loginPage.css"/>
  <link rel="stylesheet" href="CSS/mainstyle.css"/>
</head>

<body>
  <div class="ellipse-32"></div>
  <div class="wrapper">
    <div class="register">
      <div class="content">
        <div class="div">
          <p class="text-wrapper">Unlock a World of Emotion: Register to Dive into Mood Waves</p>
        </div>
        <form action="" method="POST">
          <div class="form">
            <div class="social-buttons">
                <div class="social-login-button">
                  <img class="img" src="Images/google.png" />
                  <div class="value">Sign up with Google</div>
                </div>
                <div class="value-3" style="margin-top: 10px;">OR</div>
                <div class="social-login-button">
                  <img class="img" src="Images/apple.png" />
                  <div class="value">Sign up with Apple</div>
                </div>
              </div>
            <div class="div">
              <div class="row">
                <div class="input">
                  <div class="label-2">User name</div>
                  <div class="field"><input class="placeholder" placeholder="User name" type="text" name="username" />
                  </div>
                </div>
                <div class="input">
                  <div class="label-2">Email</div>
                  <div class="field"><input class="placeholder" placeholder="Email" type="text" name="email" /></div>
                </div>
              </div>
              <div class="row">
                <div class="input">
                  <div class="label-2">Password</div>
                  <div class="field"><input class="placeholder" placeholder="Enter a strong Password" type="password"
                      name="pw" /></div>
                </div>
                <div class="input">
                  <div class="label-2">Repeat password</div>
                  <div class="field"><input class="placeholder" placeholder="Repeat Password" type="password"
                      name="pw2" /></div>
                </div>
              </div>
            </div>

            <div class="checkbox-button">
              <input type="checkbox" class="checkbox-input" id="remember-me" />
              <div class="value-3">I agree to the Terms of Service and Privacy Policy</div>
            </div>
            <button type="submit" name="submit" class="button">
              <div class="value-2">Create free account</div>
            </button>

          </div>
      </div>
      </form>
      <div class="bottom">
        <div class="text-wrapper-2">Mood Waves© 2024</div>
        <a href="">
          <div class="text-wrapper-3">Privacy Policy</div>
        </a>
      </div>
      <div class="overlap-group">
        <div class="heading">
          <div class="text-wrapper-4">MOOD WAVES</div>
        </div>
        <a href="loginPage.php" class="value-3" style="right: -750px; top: -30px;">Log in</a>
      </div>

      <img class="gemini-generated" src="Images/SignUpPage.png" />
    </div>
  </div>



</body>

</html>