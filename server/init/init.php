<?php

require './init/db.php';

function bslog($string, $type = 'error')
{
	file_put_contents("/tmp/{$type}_log.txt", sprintf("%s: %s\n", date('Y-m-d H:i:s'), $string), FILE_APPEND);
	syslog(LOG_ERR, "$type: $string");
}

