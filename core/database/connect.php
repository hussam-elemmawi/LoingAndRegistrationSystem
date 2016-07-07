<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'lr';

$connect_error = 'Sorry we are experiencing connection problems ';

mysql_connect('localhost','root','') or die($connect_error);
mysql_select_db('lr') or die($connect_error);

?>