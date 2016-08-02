<?php

$actualVersion = file_get_contents('version');
$newVersion = isset($_COOKIE['adminer_version']) ? $_COOKIE['adminer_version'] : 0;

if (version_compare($actualVersion, $newVersion) !== 0) {
	file_put_contents('version', $newVersion);
	$data = file_get_contents('https://www.adminer.org/latest-mysql-en.php');
	if ($data) {
		file_put_contents('adminer.php', $data);
	}
}

function adminer_object() {
        require_once 'plugins/plugin.php';

        foreach (glob('plugins/*.php') as $filename) {
                require_once $filename;
        }

        $plugins = array(
                new AdminerEditForeign,
                new AdminerEnumOption,
                new AdminerJsonColumn,
                new AdminerLinksDirect,
                new MyDumpDate,
        );

        return new AdminerPlugin($plugins);
}

include 'adminer.php';

