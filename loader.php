<?php
DEFINE('SITENAME', pathinfo(SITEPATH, PATHINFO_FILENAME));
DEFINE('NETWORKPATH', __DIR__);

include_once __DIR__ . '/../spring/entry.php';
variable('NetworkMenuName', 'SPANDA');

runFrameworkFile('site/begin');
