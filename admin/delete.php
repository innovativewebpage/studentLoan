
<?php
	include "include/dbc.php";
	$iid=$_REQUEST['id'];
	
	$qry=mysql_query("delete from register where name='$iid'");
	
	if($qry)
	{
		header("location:profileview.php");
	}
	else
	{
		echo mysql_error();
	}

?>