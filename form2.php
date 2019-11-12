<?php
	session_start(); 
	if(!$_SESSION['user_id']){ 
		echo"<script>alert('로그인한 후 이용하세요')</script>"; 
		echo ("<meta http-equiv='refresh' content='0; URL=test2.html'>"); 
		exit; 
	}
?>

<?php
    $con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	$select_query1 = "SELECT MAJOR FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$select_query2 = "SELECT user_id FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$select_query3 = "SELECT NAME FROM INFORMATION WHERE user_id =".$_SESSION['user_id'];
	$result1 = mysqli_query($con, $select_query1);
	$result2 = mysqli_query($con, $select_query2);
	$result3 = mysqli_query($con, $select_query3);
	while($info = mysqli_fetch_array($result1)){
		echo '학과 : '.$info['MAJOR'];
		echo "<br>";
	}

	while($info = mysqli_fetch_array($result2)){
		echo '학번 : '.$info['user_id'];
		echo "<br>";
	}

	while($info = mysqli_fetch_array($result3)){
		echo '이름 : '.$info['NAME'];
		echo "<br>";
	}
	
	mysqli_close($con);
?>

<html>
<title>장바구니</title>
<body>
<center>
<br>
학과와 학번을 선택해주세요.
<form method="post" action="form3.php"><br>
 <select name='TYPE'>
 <option value=''>학과</option>
 <option value=2>컴퓨터공학</option>
 <option value=3>사이버보안</option>
 <option value=4>전자전기공학</option><br>
 <option value=5>식품공학</option>
 <option value=6>화학신소재공학</option>
 <option value=7>건축학</option>
 <option value=8>건축도시시스템공학</option>
 <option value=9>환경공학</option>
 <option value=10>기후에너지시스템공학</option>
 <option value=11>휴먼기계바이오공학부</option>
 </select>

 <select name='TYPE'>
 <option value=''>학번</option>
 <option value=2>15</option>
 <option value=3>16</option>
 <option value=4>17</option><br>
 <option value=5>18</option>
 <option value=6>19</option>
 </select><br><br>

 
 
<input  type="submit" value="검색">
</form>
</body>
</html>