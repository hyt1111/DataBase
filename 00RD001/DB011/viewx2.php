<html>	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<head><title>*** View02 ***</title></head><body>
		<table border="1">
<?php
$conn = mysqli_connect("127.0.0.1","root","mysqlpass","00rd001");
$Table_name = "customer2";
// テーブル名（customer2）の更新

$sql = "UPDATE View01 SET C_Name='TDU商店・鳩山店' WHERE C_Name='TDU商店'";
$res = mysqli_query($conn, $sql);

$sql = "SELECT * FROM View01";
$res = mysqli_query($conn, $sql);

	$res = mysqli_query($conn,"SELECT * FROM View01");


	print("<tr>");
		for( $i = 0; $i < mysqli_num_fields($res); $i++){
		$table_name = mysqli_fetch_field_direct($res, $i);
		print	("<td>".$table_name->name."</td>");}
	print("</tr>");

	while($row = mysqli_fetch_array($res)){
	print("<tr>");
	for( $i = 0; $i < mysqli_num_fields($res); $i++ ){
		print( "<td>".$row[$i]."</td>" );
	}
	print("</tr>");
}
?>
</table></body></html>
