<?php
	$con=mysqli_connect("localhost","root","","sugangdream")
	or die("MySQL 접속 실패!!");
	$sql="
		CREATE TABLE INFORMATION(
		NAME  TEXT(100) NOT NULL,
		user_id CHAR(8) NOT NULL PRIMARY KEY,
		password VARCHAR(512) NOT NULL,
		MAJOR VARCHAR(512) NOT NULL, 
		BASKET1 TEXT(512) NOT NULL,
		BASKET2 TEXT(512) NOT NULL,
		BASKET3 TEXT(512) NOT NULL


	)";
	$ret=mysqli_query($con,$sql);
	if($ret){
		echo "INFORMATION TABLE이 성공적으로 생성됨";
	}
	else{
		echo "계정 생성 실패"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}
	mysqli_close($con);
?>