<?php
include_once "config.php";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<form action="doauth.php" method="post">
    <h3 style="text-align: center;">Please verify yourself by clicking the captcha below!</h3>
    <div style="display: flex; justify-content: center; vertical-align: middle;">
        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITEKEY; ?>"></div>

    </div>
    <br>
    <div style="display: flex; justify-content: center;">
        <button>Verify</button>
    </div>
    <h6 style="text-align: center;">Your IP-Address may be saved for security reasons.</h6>
</form>

</body>
</html>

<style>
    * {
        font-family: Bahnschrift, Arial;
    }

    #g-recaptcha-response {
        display: block !important;
        position: absolute;
        margin: -78px 0 0 0 !important;
        width: 302px !important;
        height: 76px !important;
        z-index: -999999;
        opacity: 0;
    }
</style>

<script>
    window.onload = function () {
        var $recaptcha = document.querySelector('#g-recaptcha-response');

        if ($recaptcha) {
            $recaptcha.setAttribute("required", "required");
        }
    };
</script>
