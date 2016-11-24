<div id="password_form" name="password_form">
<form action="if.php?login=<?php if(isset($_GET['username'])) echo "change_the_pass_submit"; else echo "password_submit"; ?>" method="POST" target="password_submit">
<input type="password" name="password" id="password" />
<input type="hidden" value="<?php echo $_GET['username']; ?>" name="username" />
<input type="submit" value="Change Password" />
</form>
</div>
<iframe style="display:none;" src="about:blank" name="password_submit" id="password_submit"></iframe>