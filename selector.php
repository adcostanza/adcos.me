<?php
parse_str($_SERVER['QUERY_STRING'], $output);
foreach($output as $key=>$val) {
	$key = $key;
}
if(isset($key)) $n = $key;
	else $n='home';
	require($n.'.php');
?>