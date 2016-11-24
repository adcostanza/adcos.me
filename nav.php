<?php 
parse_str($_SERVER['QUERY_STRING'], $output);
foreach($output as $key=>$val) {
	$key = $key;
}
if(isset($key)) $n = $key;
else $n = 'home';
?>
<ul>
<li id="<?php if ($n == 'home') echo 'focus'; ?>"><a href="index.php">Home</a></li>
<li id="<?php if ($n == 'projects') echo 'focus'; ?>"><a href="?projects">Projects</a></li>
<li id="<?php if ($n == 'ed') echo 'focus'; ?>"><a href="?ed">Resume</a></li>
</ul>