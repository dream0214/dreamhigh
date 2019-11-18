<?php
	session_start(); 
	if(!$_SESSION['user_id']){ 
		echo"<script>alert('로그인한 후 이용하세요')</script>"; 
		echo ("<meta http-equiv='refresh' content='0; URL=test2.html'>"); 
		exit; 
	}
?>

<?php
	$var1 = $_POST["ONE"];
	$var2 = $_POST["TWO"];
	$var3 = $_POST["THREE"];
?>

<?php
    $con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	$select_basket1 = "SELECT BASKET1 FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$select_basket2 = "SELECT BASKET2 FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$select_basket3 = "SELECT BASKET3 FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];

	$result1 = mysqli_query($con, $select_basket1);
	$result2 = mysqli_query($con, $select_basket2);
	$result3 = mysqli_query($con, $select_basket3);
	
	$old_basket1=mysqli_fetch_array($result1);
	$old_basket2=mysqli_fetch_array($result2);
	$old_basket3=mysqli_fetch_array($result3);
	
	
	$sql1= "UPDATE INFORMATION SET BASKET1 =". $var1. " WHERE user_id =".$_SESSION['user_id'];
	$sql2= "UPDATE INFORMATION SET BASKET2 =". $var2. " WHERE user_id =".$_SESSION['user_id'];
	$sql3= "UPDATE INFORMATION SET BASKET3 =". $var3. " WHERE user_id =".$_SESSION['user_id'];
	mysqli_query($con, $sql1);
	mysqli_query($con, $sql2);
	mysqli_query($con, $sql3);
	
	
	

		if($old_basket1['BASKET1']!=$var1){
			$sql41= "UPDATE SUBJECT,INFORMATION SET SUBJECT.PEOPLENUM1 = SUBJECT.PEOPLENUM1 - 1 WHERE (SUBJECT.NUMBER = {$old_basket1['BASKET1']}) AND (INFORMATION.user_id =".$_SESSION['user_id']." )" ;
			mysqli_query($con, $sql41);
			$sql42= "UPDATE SUBJECT, INFORMATION SET SUBJECT.PEOPLENUM1 = SUBJECT.PEOPLENUM1 + 1 WHERE (SUBJECT.NUMBER = INFORMATION.BASKET1) AND (INFORMATION.user_id =".$_SESSION['user_id']." )";
			mysqli_query($con, $sql42);
		}
		
		if($old_basket2['BASKET2']!=$var2){
			
			$sql51= "UPDATE SUBJECT,INFORMATION SET SUBJECT.PEOPLENUM2 = SUBJECT.PEOPLENUM2 - 1 WHERE (SUBJECT.NUMBER = {$old_basket2['BASKET2']}) AND (INFORMATION.user_id =".$_SESSION['user_id']." )";
			mysqli_query($con, $sql51);
			$sql52= "UPDATE SUBJECT, INFORMATION SET SUBJECT.PEOPLENUM2 = SUBJECT.PEOPLENUM2 + 1 WHERE (SUBJECT.NUMBER = INFORMATION.BASKET2) AND (INFORMATION.user_id =".$_SESSION['user_id']." )";
			mysqli_query($con, $sql52);
		}
	
		if($old_basket3['BASKET3']!=$var3){		
			$sql61= "UPDATE SUBJECT,INFORMATION SET SUBJECT.PEOPLENUM3 = SUBJECT.PEOPLENUM3 - 1 WHERE (SUBJECT.NUMBER = {$old_basket3['BASKET3']}) AND (INFORMATION.user_id =".$_SESSION['user_id']." )";
			mysqli_query($con, $sql61);
			$sql62= "UPDATE SUBJECT, INFORMATION SET SUBJECT.PEOPLENUM3 = SUBJECT.PEOPLENUM3 + 1 WHERE (SUBJECT.NUMBER = INFORMATION.BASKET3) AND (INFORMATION.user_id =".$_SESSION['user_id']." )";
			mysqli_query($con, $sql62);
		}
	
			
	mysqli_close($con);
?>



<html>
<title>장바구니</title>
<body>
<center>
<br>
1~3순위 담은 인원입니다.
<form method="post" action="form4.php"><br>

<?php
    $con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	$select_query4 = "SELECT PEOPLENUM1 FROM SUBJECT WHERE NUMBER =". $var1;
	$select_query5 = "SELECT PEOPLENUM2 FROM SUBJECT WHERE NUMBER =". $var2;
	$select_query6 = "SELECT PEOPLENUM3 FROM SUBJECT WHERE NUMBER =". $var3;
	$select_num1 = "SELECT NUM FROM SUBJECT WHERE NUMBER =". $var1;
	$select_num2 = "SELECT NUM FROM SUBJECT WHERE NUMBER =". $var2;
	$select_num3 = "SELECT NUM FROM SUBJECT WHERE NUMBER =". $var3;
	$result4 = mysqli_query($con, $select_query4);
	$result5 = mysqli_query($con, $select_query5);
	$result6 = mysqli_query($con, $select_query6);
	$show1 = mysqli_query($con, $select_num1);
	$show2 = mysqli_query($con, $select_num2);
	$show3 = mysqli_query($con, $select_num3);
	
	
	while($info2 = mysqli_fetch_array($result4)){
		echo '<center>1순위 : '.$info2['PEOPLENUM1'].'명</center>';
		echo "<br>";
	}
	while($info3 = mysqli_fetch_array($show1)){
		echo '<center>인원제한 : '.$info3['NUM'].'명</center>';
		echo "<br>";
	}
	?>
		  <input type='button' 
         value='수강신청' 
         onclick='alert("수강신청 성공!.")'/>
<?php
	while($info2 = mysqli_fetch_array($result5)){
		echo '<center>2순위 : '.$info2['PEOPLENUM2'].'명</center>';

		echo "<br>";
	}
	while($info3 = mysqli_fetch_array($show2)){
		echo '<center>인원제한 : '.$info3['NUM'].'명</center>';
		echo "<br>";
	}
	?>
	  <input type='button' 
         value='수강신청' 
         onclick='alert("수강신청 성공!.")'/>
	
	<?php
	
	while($info2 = mysqli_fetch_array($result6)){
		echo '<center>3순위 : '.$info2['PEOPLENUM3'].'명</center>';

		echo "<br>";
	}
	while($info3 = mysqli_fetch_array($show3)){
		echo '<center>인원제한 : '.$info3['NUM'].'명</center>';
		echo "<br>";
	}
		mysqli_close($con);
	?>
	
		  <input type='button' 
         value='수강신청' 
         onclick='alert("수강신청 성공!.")'/>




<br><br>

</form>
</body>
</html>