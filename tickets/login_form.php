<?php
if (@$_SESSION['auth'] == 1):
?>
You are already logged in.
<?php
else:
?>
<div name="error" id="error"></div><br />
<form action="if.php?login=login" method="POST" target="login_submit">
<input type="text" name="username" /><br />
<input type="password" name="password" /><br />
<input type="submit" value="Login" />
</form>
<iframe style="display:none;" src="about:blank" name="login_submit" id="login_submit"></iframe>
<?php
endif;
?>