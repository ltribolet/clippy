<?php

foreach (glob("ace/mode-*.js") as $filename) {
	$languages = array();
	preg_match('/(\w+).js$/', $filename, $match);

	$name = $match[1];

	$languages[] = array('safe_name' => $name, 'name' => preg_replace('/_/', ' ', $name));

	print_r($languages);
}
