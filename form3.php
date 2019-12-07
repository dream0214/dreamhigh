<?php
	session_start(); 
	if(!$_SESSION['user_id']){ 
		echo"<script>alert('로그인한 후 이용하세요')</script>"; 
		echo ("<meta http-equiv='refresh' content='0; URL=test2.html'>"); 
		exit; 
	}
?>
<br>



<html>
<head>
<title></title>
<script>
var tid;
var cnt = parseInt(1800);//초기값(초단위)
function counter_init() {
	tid = setInterval("counter_run()", 1000);
}

function counter_reset() {
	clearInterval(tid);
	cnt = parseInt(1800);
	counter_init();
}

function counter_run() {
	document.all.counter.innerText = time_format(cnt);
	cnt--;
	if(cnt < 0) {
		clearInterval(tid);
		self.location = "logout.php";
	}
}
function time_format(s) {
	var nHour=0;
	var nMin=0;
	var nSec=0;
	if(s>0) {
		nMin = parseInt(s/60);
		nSec = s%60;

		if(nMin>60) {
			nHour = parseInt(nMin/60);
			nMin = nMin%60;
		}
	} 
	if(nSec<10) nSec = "0"+nSec;
	if(nMin<10) nMin = "0"+nMin;

	return ""+nHour+":"+nMin+":"+nSec;
}
</script>
</head>

<body>
<span id="counter"> </span> 후 자동로그아웃 <input type="button" value="연장" onclick="counter_reset()">
</body>
</html>
<script>
counter_init();
</script>




<?php
	$key_name = 'nameefghijklmnopqrstuvwxyz1234';
	
	function AES_Decode($base64_text,$key)
	{
		return openssl_decrypt(base64_decode($base64_text), "aes-256-cbc", $key, true, str_repeat(chr(0), 16));
	}
?>

<?php
    $conn=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	
	$stmt1=$conn->stmt_init();
	$stmt1=$conn->prepare("SELECT MAJOR FROM INFORMATION WHERE user_id =?");
	$stmt1->bind_param("s",$_SESSION['user_id']);
	$stmt1->execute();
	$result1=$stmt1->get_result();
	
	$stmt2=$conn->stmt_init();
	$stmt2=$conn->prepare( "SELECT left(user_id,2) user_id FROM INFORMATION WHERE user_id =?");
	$stmt2->bind_param("s",$_SESSION['user_id']);
	$stmt2->execute();
	$result2=$stmt2->get_result();
	
	$stmt3=$conn->stmt_init();
	$stmt3=$conn->prepare("SELECT NAME FROM INFORMATION WHERE user_id =?");
	$stmt3->bind_param("s",$_SESSION['user_id']);
	$stmt3->execute();
	$result3=$stmt3->get_result();
	
	
	while($info = mysqli_fetch_array($result1)){
		echo '<center>학과 : '.$info['MAJOR'].'</center>';
		echo "<br>";
	}

	while($info = mysqli_fetch_array($result2)){
	
		echo '<center>학번 : '.$info['user_id'].'</center>';
		echo "<br>";
	}

	while($info = mysqli_fetch_array($result3)){
		$name=AES_Decode($info['NAME'],$key_name);
		echo '<center>이름 : '.$name.'</center>';
		echo "<br>";
	}
	
	$stmt1->close();
	$stmt2->close();
	$stmt3->close();
	mysqli_close($conn);
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

