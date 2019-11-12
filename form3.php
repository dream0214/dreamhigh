<?php
	session_start(); 
	if(!$_SESSION['user_id']){ 
		echo"<script>alert('로그인한 후 이용하세요')</script>"; 
		echo ("<meta http-equiv='refresh' content='0; URL=test2.html'>"); 
		exit; 
	}
?>
<br>
<?php
    $con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	$select_query1 = "SELECT MAJOR FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$select_query2 = "SELECT left(user_id,2) user_id FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$select_query3 = "SELECT NAME FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$result1 = mysqli_query($con, $select_query1);
	$result2 = mysqli_query($con, $select_query2);
	$result3 = mysqli_query($con, $select_query3);
	
	while($info = mysqli_fetch_array($result1)){
		echo '<center>학과 : '.$info['MAJOR'].'</center>';
		echo "<br>";
	}

	while($info = mysqli_fetch_array($result2)){
		echo '<center>학번 : '.$info['user_id'].'</center>';
		echo "<br>";
	}

	while($info = mysqli_fetch_array($result3)){
		echo '<center>이름 : '.$info['NAME'].'</center>';
		echo "<br>";
	}
	
	mysqli_close($con);
?>

<html>
<title>장바구니</title>
<body>
<center>
<br>
1~3순위 학수번호를 입력해주세요.
<form method="post" action="form4.php"><br>
 <input type="int" name="ONE" placeholder='1순위'>
 <input type="int" name="TWO" placeholder='2순위'>
 <input type="int" name="THREE" placeholder='3순위'>

<br><br>
<input  type="submit" value="검색">
</form>
</body>
</html>
