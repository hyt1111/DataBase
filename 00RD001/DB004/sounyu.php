<?php
$conn=mysqli_connect("127.0.0.1","root","mysqlpass","00rd001") or die("失敗て゛す");
mysqli_set_charset($conn,"utf8");
print "--*** 成功しました***--";
mysqli_query($conn,"INSERT INTO customer (C_ID, C_Name, C_Address, C_Yoshin, C_Other) VALUES (500, 'サカト゛新店舗','埼玉 県比企郡鳩山町石坂','800000','特記なし')");
mysqli_close($conn);
?>
