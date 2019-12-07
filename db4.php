<?php
	$con=mysqli_connect("localhost","root","","sugangdream")
	or die ("MySQL 접속 실패!!");
	$sql="
	CREATE TABLE SUBJECT(
	NAME VARCHAR(512) NOT NULL,
	NUMBER INT(10),
	PLACE VARCHAR(512) NOT NULL,
	PROFESSOR VARCHAR(512) NOT NULL,
	PEOPLENUM1 VARCHAR(10000),
	PEOPLENUM2 VARCHAR(10000),
	PEOPLENUM3 VARCHAR(10000),
	NUM INT(200) NOT NULL
	)";
	
	$ret=mysqli_query($con,$sql);
	if($ret){
		echo "SUBJECT TABLE이 성공적으로 생성됨";
		}
	else{
		echo "subject 생성 실패"."<br>";
		echo "실패 원인 : ".mysqli_error($con);
		}
		mysqli_close($con);
		?>