<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="CSS/styleguide.css">
    <link rel="stylesheet" href="CSS/loginPage.css">
    <!--<link rel="stylesheet" href="global.css">-->
    <link rel="stylesheet" href="CSS/mainstyle.css">

</head>
<body>
    
    <div class="Wrapper">
    <div class="login">
        <div class="content">
            <div class="ellipse-32"></div>
            <div class="div">
                <span class="hello">Hello, User!
                </span>
                <p class="text-wrapper">Welcome Back to Mood Waves: Log in to Explore Your Emotions</p>
            </div>
            <form action="createpage.php" method="POST">
                <div class="form">
                    <div class="social-buttons">
                        <div class="social-login-button">
                            <img class="frame" src="Images/google.png" alt="Google">
                            <a href="#"><div class="value">Sign In with Google</div></a>
                        </div>
                        <div class="social-login-button">
                            <img class="img" src="Images/apple.png" alt="Apple">
                            <a href="#"><div class="value">Sign In with Apple</div></a>
                        </div>
                    </div>
                    <div class="divider">
                        <img class="divider-2" src="Images/Divider.png" alt="Divider">
                        <div class="text-wrapper-2">or continue with e-mail</div>
                        <img class="divider-2" src="Images/Divider.png" alt="Divider">
                    </div>

                    <div class="input">
                        <div class="field-2">
                            <img class="img" src="Images/mail.png" alt="username">
                            <input type="text" name="username" class="field" placeholder="Enter Your username">
                        </div>
                    </div>
                    <div class="input">
                        <div class="field-2">
                            <img class="img" src="Images/password.png" alt="Password">
                            <input type="password" class="field" placeholder="Password" name="pw">
                        </div>
                    </div>
<br>
                    <div class="bottom">
                        <div class="checkbox-button">
                            <label class="checkbox-label">
                                <input type="checkbox" class="checkbox-input" id="remember-me">
                                <div class="checkbox-icon"></div>
                                <br>
                                <div class="value-3">Remember me</div> 
                            </label>
                        </div>
                        <a href="#" class="forgot-password"><div class="value-4">Forgot Password?</div></a>
                    </div>
                    <button type="submit" name="login" class="button" value="Log in" style="color: white; font-weight: 600;">
                    <div class="value-5"></div>
                    <br>
                    <div class="sign-up">
                        <div class="value-6">Don’t have an account?</div>
                        <a href="registeruser.php" class="sign-up-link"><div class="value-4">Sign Up</div></a>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-wrapper-3">MOOD WAVES</div>
        <div class="overlap-group background-image">
            <div class="group">
                <div class="text-wrapper-4">Mood Waves</div>
                <div class="text-wrapper-5">Thought Visualization</div>
                <p class="step-into-your">
                    Step Into Your Emotional Sanctuary: <br /><br />Log in to Your Mood Waves Account and Reconnect with Your
                    Inner Self through Creative Expression
                </p>
            </div>
        </div>
    </div>
</div>
    <!-- Preloader HTML -->
    <div class="preloader">
        <div class="spinner"></div>
</div>
<script src="JS/script.js"></script>
</body>
</html>