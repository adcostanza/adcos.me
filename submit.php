<?php
	if (isset($_GET['submit'])) {
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comments = $_POST['comments'];
			
			mail('adcostanza@gmail.com','Website comment: '.$email,  $email.' \n '.$comments) or die('cannot mail');
		}
	}
?>