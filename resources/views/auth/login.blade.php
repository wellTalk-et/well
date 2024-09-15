<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- custom css-->
        <link rel="stylesheet" href="./static/styles/global.css">
        <link rel="stylesheet" href="./static/styles/nav.css">
        <link rel="stylesheet" href="./static/styles/login-register.css">
    <title>Login</title>
</head>
<body>
    <nav class="nav-bar">
        <div class="nav-bar-lg">
         <div class="brand-name">
             <a href="index.html">WellTalk</a>
         </div>
         <div class="nav-links">
             <p class="services">Services <span></span></p>
             <p class="for-professionals">For Professionals</p>
             <p class="about-us">About Us</p>
             <p class="pricing">Pricing</p>
             <!-- <button class="primary btn-md">Get Started</button> -->
         </div> 
         </div>
        <div class="nav-bar-md">
         <!-- <button class="primary btn-md">Get Started</button>s -->
         <div class="brand-name">
             WellTalk
         </div>
         <div class="nav-links-md js-nav-links-md">
             <p class="services">Services <span></span></p>
             <p class="for-professionals">For Professionals</p>
             <p class="about-us">About Us</p>
             <p class="pricing">Pricing</p>
         </div>
 
         <div>
             <a class="menu-button js-menu-button">
                <div class="menu-bar start"></div>
                <div class="menu-bar middle"></div>
                <div class="menu-bar end"></div>
             </a>
         </div>
        </div>
     </nav>

    <main>
        <div class="login container">
            <form action="#" method="post" class="login-form" id="js-login-form">
            <h2 class="login text">Log in</h2>
            <input type="text" placeholder="username or email" name="email-username" id="js-email-username" class="text input" 
            required pattern="^[a-zA-Z0-9._@]{4,}$" autocomplete="email" title="invalid username or email">
            <span id="js-username-error" class="error"></span>
            
            <input type="password" placeholder="password" name="password" id="js-password" class="password input" required 
            pattern="^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\W_]).{8,}$" autocomplete="current-password" title="Password must be at least 8 characters with uppercase, lowercase, and special characters.">
            <span id="js-password-error" class="error"></span>

            <input type="submit" name="submit" value="Log in" id="submit btn js-submit" class="input btn btn-lg primary">
            <span class="forgot-password-span"><a href="#" class="forgot-password" id="js-forgot-password-error"></a></span>
            <div class="divider">
            </form>
                <div></div>
                <p>or</p>
                <div></div>
            </div>
            <button class="btn btn-lg google go-to-question-page"> <img src="./static/assets/icons/devicon_google.svg" alt="" > Continue with Google</button>
            <button class="btn btn-lg apple go-to-question-page"> <img src="./static/assets/icons/mdi_apple.svg" alt=""> Continue with Apple</button>
            <p class="dont-have-account">Don't have an account? <span class="sign-up"><a href="register.html">Sign up</a></span></p>
        </div>
    </main>

    <script src="./static/scripts/navbar.js"></script>
    <script src="./static/scripts/login.js"></script>

    
</body>
</html>