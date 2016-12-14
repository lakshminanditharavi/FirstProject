 
<?php
$link=mysql_connect("localhost","root","admin")  or die('Could not connect: ' . mysql_error());

mysql_select_db('emp') or die('Could not select database');
?>