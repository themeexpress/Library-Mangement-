<?php

$link = mysql_connect('localhost','root','');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
  //mysql_close($link);
mysql_select_db('library',$link ) or die ('Database didnot select');
//echo 'Connected successfully';

?>
