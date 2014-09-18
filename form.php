<form method="post" action="check.php">
<?php
require_once('recaptchalib.php'); // reCAPTCHA Library
$pubkey = "6LfNZfoSAAAAADzJKu7ITvFQjOLYWgPj4j9_le-w"; // Public API Key
echo recaptcha_get_html($pubkey); // Display reCAPTCHA
?>
<input type="submit" value="Check" />
</form>