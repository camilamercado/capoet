<?php
require_once('recaptchalib.php');
$pubkey = "6LfNZfoSAAAAADzJKu7ITvFQjOLYWgPj4j9_le-w"; // Public API Key
$privkey = "6LfNZfoSAAAAADMi3dlMAlIvIR7nmsEAcYjFbdyx"; // Private API Key

$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if ($resp->is_valid) {
    ?>success<?
}
else 
{
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       "(reCAPTCHA said: " . $resp->error . ")");
}
?>