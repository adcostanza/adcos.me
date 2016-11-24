<?php
session_start();
require('login.php');
require('person.php');
if(@$_GET['login'] == 'logout'):
session_destroy();
echo 'Logged out';
else:
if(!isset($_SESSION['auth'])) {
	if(!$_GET) {
		echo 'Please login below:<br /><Br />';
		require('login_form.php');
	}
}

if (@$_GET['login'] == 'login') {
	if ($_POST['username'] == "" || $_POST['password'] == "") die ('Please do not leave a field blank');
	$login = new login($_POST['username'], $_POST['password'], 'users.php');
	if($login->check() == 1) {
		$_SESSION['username'] = $login->username;
		$_SESSION['level'] = $login->user_level();
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['auth'] = 1;
		echo '<script>top.window.page("if.php?login=home");</script>';
		echo 1;
	} else {
		echo 0;
		echo '<script>top.document.all.error.innerHTML = "Your username or password is incorrect. Please try again:";</script>';
	}
}
if ($_SESSION['auth'] == 1):
if(!isset($login)) $login = new login($_SESSION['username'], $_SESSION['password'], 'users.php');
$_SESSION['auth'] == $login->check();
if(!isset($_GET['search'])):
?>
<script src="javascript.js" type="text/javascript"></script>
<div class="logout" onclick="page('if.php?login=logout');">Logout</div>
<div class="link" onclick="page('if.php?login=password_form');">Change Your Password</div>
<div class="link" onclick="page('if.php?login=home');">Purchase Tickets</div>
<?php
if($_SESSION['level'] == 0):
?>
<div class="link" onclick="page('if.php?login=add_user');">Add New User</div>
<div class="link" onclick="page('if.php?login=delete_user');">Delete User</div>
<div class="link" onclick="page('if.php?login=change_a_pass');">Change a User's Password</div>
<div class="link" onclick="location.replace('index.php?login=view_excel');">View Spreadsheet</div>
<?php
if(@$_GET['login'] == 'delete_user') {
	echo '<br />';
	echo $login->list_users('delete_user_submit');
}
if(@$_GET['login'] == 'delete_user_submit') {
	echo '<br />';
	echo $login->delete_user($_GET['username']);
}
if(@$_GET['login'] == 'add_user') require('add_user_form.php');
if(@$_GET['login'] == 'add_user_submit'):
?>
<script>top.document.all.user_form.innerHTML = '<br /><?php echo $login->add_user($_POST['username']); ?>';</script>
<?php
endif;
endif;
endif;
?>
<br />
<?php
if(@$_GET['login'] == 'password_form') require('password_form.php');
if (@$_GET['login'] == 'password_submit'):
	if(!isset($login)) $login = new login($_SESSION['username'], $_SESSION['password'], 'users.php');
	$login->password = $_POST['password'];
	$login->change_password();
	$_SESSION['password'] = $_POST['password'];
?>
<script>top.document.all.password_form.innerHTML = 'Your password has been changed.';</script>
<?php
endif;
if((@$_GET['login'] == 'home') || !$_GET):
if($_SESSION['password'] == '$dTEMP'):
require('password_form.php');
else:
?>
<input type="text" onkeyup="search(this.value);" /><br />
<div id="search_results"></div>
<?php
endif;
endif;
if(@$_GET['login'] == 'change_a_pass') echo $login->list_users('change_password_submit');
if(@$_GET['login'] == 'change_password_submit' && isset($_GET['username'])) require("password_form.php");
if(@$_GET['login'] == 'change_the_pass_submit' && isset($_POST['username'])) echo $login->change_other_pass($_POST['username'], $_POST['password']);
if(@$_GET['login'] == 'add_guest_form'):
	$person = new person($_GET['lastname'], $_GET['firstname'], 'names.php');
	echo $person->add_guest();
endif;
if(@$_GET['login'] == 'add_student'):
	$person = new person($_GET['lastname'], $_GET['firstname'], 'names.php');
	echo $person->add_student();
endif;
if(@$_GET['login'] == 'add_both'):
	$person = new person($_GET['lastname'], $_GET['firstname'], 'names.php');
	echo $person->add_both();
endif;
if(isset($_GET['search'])) {
	echo '<script src="javascript.js" type="text/javascript"></script>'."\n\n";
	echo $login->search_list($_GET['search']); 
}
endif;
endif;
?>