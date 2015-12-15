<?php
	$conn=@mysql_connect("localhost","root","zyl19961020");
	if($conn==null)
		die("数据库连接失败");
	mysql_query("set names 'gb2312'");
	if(!mysql_select_db("vote"))
	{
		die("数据库连接失败");
	}
?>
