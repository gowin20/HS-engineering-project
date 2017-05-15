<?php 
$host = "localhost";
$database = "project";
$user = "projectUsesp";
$password = "Q@i686yV__w]";

$link = @mysql_connect($host,$user,$password);
if (!$link) {

die('This site is currently undergoing maintenance.<p>Please check back later today.  Thanks!<p>');

}
else
{
	mysql_select_db($database);
}
?>
