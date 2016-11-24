<?php
if(@$_SESSION['auth'] == 1):
?>
<div id="user_form" name="user_form">
<form action="if.php?login=add_user_submit" method="POST" target="user_submit">
<input type="text" name="username" value="Username" onclick="this.value='';"></input>
<input type="submit" value="Add User"></input>
</form>
</div>
<iframe name="user_submit" id="user_submit" src="about:blank" style="display:none;"></iframe>
<?php
endif;
?>