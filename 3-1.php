﻿<html><meta http-equiv="content-type" content="text/html; charset=utf-8">
<head><title>*** dbfile_list ***</title></head><body>
		<table border="1">
<?php
$conn = mysqli_connect("127.0.0.1","root","mysqlpass","19rd142");
$Table_name = "product";
	$res = mysqli_query($conn,"SELECT Code as 商品番号,Name as 商品名,Category as 種別,Price as 単価 FROM $Table_name Where Category like '菓子'");
	print("<tr>");
	for( $i = 0; $i < mysqli_num_fields($res); $i++){
		$table_name = mysqli_fetch_field_direct($res, $i);
		print ("<td>".$table_name->name."</td>");
	}
	print("</tr>");
	while($row = mysqli_fetch_array($res)){
		print("<tr>");
		for( $i = 0; $i < mysqli_num_fields($res); $i++ ){
		print( "<td>".$row[$i]."</td>" );}
		print("</tr>");
	}?></table></body></html>