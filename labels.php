<?php
	title[1] = array('Carbon fiber buggy','Trigonal manipulator', 'UltraLander','Stress FEA analysis');
	title[2] = array('Crane Project','Machined Buggy Parts','Robotic Locomotion','Wrench Project');
	
		for($i=0;$i<2;$i++) {
			for($a=0;$a<4;$a++) {
				echo '<div class="grid_4 ';
				if($a == 0) echo 'alpha';
				elseif($a == 3) echo 'omega';
				echo '">'
					.'<div class="label">'
					.'<h1>'.title[$i][$a].'</h1>'
					.'<img src="images/label.png" />'
					'</div>'
					.'<div class="info">'
					.'<img class="cover" src="images/covers/buggy-pic.jpg" />'
					.'<p>talk about that buggy! woohoo</p>'
					.'</div>';
			}
		}
	?>