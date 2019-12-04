<?php
	session_start(); 
	if(!$_SESSION['user_id']){ 
		echo"<script>alert('로그인한 후 이용하세요')</script>"; 
		echo ("<meta http-equiv='refresh' content='0; URL=test2.html'>"); 
		exit; 
	}
?>

<html>
<head>
<title></title>
<script>
var tid;
var cnt = parseInt(3600);//초기값(초단위)
function counter_init() {
	tid = setInterval("counter_run()", 1000);
}

function counter_reset() {
	clearInterval(tid);
	cnt = parseInt(3600);
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
   $var1 = $_POST["ONE"];
   $var2 = $_POST["TWO"];
   $var3 = $_POST["THREE"];
   $var1 = my_classnum($var1);
   $var2 = my_classnum($var2);
   $var3 = my_classnum($var3);
   check($var1,$var2,$var3);
   function my_classnum($x)
   {     
         if(($x>=38970)&&($x<=38994)){                     
               return $x;
         }
      else
      {
         echo"<script>alert('정확한 학수번호를 입력하세요.')</script>"; 
         echo ("<meta http-equiv='refresh' content='0; URL=form3.php'>"); 
         exit;
      }     
   }
   function check($x,$y,$z)
   {
      if($x==$y||$y==$z||$z==$x)
         
         {
         echo"<script>alert('서로 다른 학수번호를 입력해주세요.')</script>"; 
         echo ("<meta http-equiv='refresh' content='0; URL=form3.php'>"); 
         exit;
         }
   }
?>


<html>
<title>장바구니</title>
<body>
<center>
<br>
1~3순위 담은 인원입니다.
<form method="post" action="form4.php"><br>

<?php
    $conn=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	
	$stmt1=$conn->stmt_init();
	$stmt1=$conn->prepare("SELECT PEOPLENUM1 FROM SUBJECT WHERE NUMBER =?");
	$stmt1->bind_param("s",$var1);
	$stmt1->execute();
	$result4=$stmt1->get_result();
	
	$stmt2=$conn->stmt_init();
	$stmt2=$conn->prepare("SELECT PEOPLENUM2 FROM SUBJECT WHERE NUMBER =?");
	$stmt2->bind_param("s",$var2);
	$stmt2->execute();
	$result5=$stmt2->get_result();
	
	$stmt3=$conn->stmt_init();
	$stmt3=$conn->prepare("SELECT PEOPLENUM3 FROM SUBJECT WHERE NUMBER =?");
	$stmt3->bind_param("s",$var3);
	$stmt3->execute();
	$result6=$stmt3->get_result();
	
	$stmt4=$conn->stmt_init();
	$stmt4=$conn->prepare("SELECT NUM FROM SUBJECT WHERE NUMBER =?");
	$stmt4->bind_param("s",$var1);
	$stmt4->execute();
	$show1=$stmt4->get_result();
	
	$stmt5=$conn->stmt_init();
	$stmt5=$conn->prepare("SELECT NUM FROM SUBJECT WHERE NUMBER =?");
	$stmt5->bind_param("s",$var2);
	$stmt5->execute();
	$show2=$stmt5->get_result();
	
	$stmt6=$conn->stmt_init();
	$stmt6=$conn->prepare("SELECT NUM FROM SUBJECT WHERE NUMBER =?");
	$stmt6->bind_param("s",$var3);
	$stmt6->execute();
	$show3=$stmt6->get_result();
	
	
	
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
		$stmt1->close();
		$stmt2->close();
		$stmt3->close();
		$stmt4->close();
		$stmt5->close();
		$stmt6->close();
		
		mysqli_close($conn);
	?>
	
		  <input type='button' 
         value='수강신청' 
         onclick='alert("수강신청 성공!.")'/>




<br><br>

</form>
</body>
</html>