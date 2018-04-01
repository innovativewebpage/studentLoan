<?php
	$connect=mysql_connect("localhost","root","")or die("Couldn't Connect");
	$db=mysql_select_db("loan_recovery",$connect)or die("Couldn't Connect db");
?>