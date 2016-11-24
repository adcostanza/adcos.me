
<div class="contactSelector">
<div class="grid_22 push_1" id="projHead">
<h2>Please <span>contact me</span> below with any questions or comments you may have.</h2>
</div>
<div class="clear"></div>
	
	
	<form class="contactForm" action="submit.php" method="post">
	<div class="grid_7 push_5 alpha">
	Name<br />
	<input type="text" name="name" />
	</div>
	<div class="grid_7 push_5 omega">
	Email<br />
	<input type="text" name="email" />
	</div>
	<div class="grid_14 push_5 alpha">
	Comments<br />
	<textarea name="comments"></textarea>
	<center>
	<input type="submit" value="Contact Me" />
	</center>
	</div>
	</form>
	
</div>
	
<script type="text/javascript">
	$(document).ready(function(){
		$('.logoImg').attr('src','images/spring.png').css('height','35px').css('bottom','15px');
		
	});
</script>
<style>
#bottomNav {
	bottom:100px;
}
#projHead, #smallboxes {
	bottom:125px;
}
</style>