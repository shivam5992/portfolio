<?php
$dbc=@mysql_connect('hellosky.db.10800107.hostedresource.com','username','password')OR die('could not connect'. mysql_error());
mysql_select_db('hellosky')OR die('could not select database'.mysql_error());
?>