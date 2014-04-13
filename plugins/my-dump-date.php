<?php

class MyDumpDate
{

	function dumpFilename($identifier) {
		if (!$identifier) {
			$identifier = str_replace('adminer.', '', $_SERVER['HTTP_HOST'] ?: 'localhost');
			$identifier = preg_replace('/[^a-z0-9]/i', '', $identifier);
		}

		return friendly_url($identifier . date('Ymd_Hi'));
	}

}

