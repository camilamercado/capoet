<?php
require_once('recaptchalib.php'); // reCAPTCHA Library
$pubkey = "6LfNZfoSAAAAADzJKu7ITvFQjOLYWgPj4j9_le-w"; // Public API Key
$privkey = "6LfNZfoSAAAAADMi3dlMAlIvIR7nmsEAcYjFbdyx"; // Private API Key

if ($_POST['doVerify']) {
  $verify = recaptcha_check_answer($privkey, $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field']);
  if ($verify->is_valid) {
    # Enter Success Code
    echo "Your response was correct!";
  }
  else {
    # Enter Failure Code
    echo "You did not enter the correct words.  Please try again.";
  }
}
?>
<div>
<form method="post" action="verify.php">
<?php echo recaptcha_get_html($pubkey, $verify->error); ?>
<input type="submit" name="doVerify" value="Verify" />
</form>
</div>