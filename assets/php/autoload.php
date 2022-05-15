<?php

	require_once 'vendor/autoload.php';
	require_once 'assets/php/yuki/autoload.php';

	foreach ([ 
		// Global
		'global/page/',
		'global/core/',
		'global/utils/',
		'global/system/',
		'global/security/',
	] as $p) {
		foreach (scandir(__DIR__ . '/' . $p) as $file) {
			if (!in_array(
				substr($file, 0, 1), [ '_' ]
			) && is_file(
				__DIR__ . '/' . $p . $file
			) && pathinfo(
				$file, PATHINFO_EXTENSION
			) == 'php') {
				require_once $p . $file;
			}
		}
	}