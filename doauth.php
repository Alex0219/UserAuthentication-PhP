<?php

//verify recaptcha
include_once "config.php";
$post_data = http_build_query(
    array(
        'secret' => RECAPTCHA_SECRET,
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' =>
    array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);
if (!$result->success) {
    echo "<h3 style='text-align: center;'>Ooops! Something went wrong. Please try to verify another time.</h3>";
} else {
    echo "<h3 style='text-align: center;'>Your account has been verified successfully. You can now close this page and return back to Minecraft!</h3>";
}
?>

<style>
    * {
        font-family: Bahnschrift, Arial;
    }
</style>

