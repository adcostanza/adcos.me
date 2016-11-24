<?php session_start(); ?>
<style>
div#mainbody {
	text-align:center;
}
</style>
<script src="javascript.js" type="text/javascript"></script>
<div id="mainbody">
<?php
if(@$_SESSION['auth'] == 1 && (@$_GET['login'] != 'view_excel')) require("if.php");
else require('login_form.php');
?>
</div>
<div id="logout_part" name="logout_part" style="display:none;">You have been logged out</div>
<?php
if((@$_GET['login'] == 'view_excel') && (@$_SESSION['auth'] == 1)):
require("person.php");
$person = new person(" ", " ", 'names.php');
$person->make_csv('dance.csv');
?>
<script>window.open('download.php?dance.csv');</script>
<?php
endif;
?>