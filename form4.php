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
<form method="post" action="form4.php"><br>

<?php
    $conn=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	
	$stmt4=$conn->stmt_init();
	$stmt4=$conn->prepare("SELECT PEOPLENUM1 FROM SUBJECT WHERE NUMBER =?");
	$stmt4->bind_param("s",$_POST["ONE"]);
	$stmt4->execute();
	$result4=$stmt4->get_result();
	
	$stmt41=$conn->stmt_init();
	$stmt41=$conn->prepare("SELECT PEOPLENUM2 FROM SUBJECT WHERE NUMBER =?");
	$stmt41->bind_param("s",$_POST["ONE"]);
	$stmt41->execute();
	$result41=$stmt41->get_result();
	
	$stmt42=$conn->stmt_init();
	$stmt42=$conn->prepare("SELECT PEOPLENUM3 FROM SUBJECT WHERE NUMBER =?");
	$stmt42->bind_param("s",$_POST["ONE"]);
	$stmt42->execute();
	$result42=$stmt42->get_result();
	
	$stmt5=$conn->stmt_init();
	$stmt5=$conn->prepare("SELECT PEOPLENUM1 FROM SUBJECT WHERE NUMBER =?");
	$stmt5->bind_param("s",$var2);
	$stmt5->execute();
	$result5=$stmt5->get_result();
	
	$stmt51=$conn->stmt_init();
	$stmt51=$conn->prepare("SELECT PEOPLENUM2 FROM SUBJECT WHERE NUMBER =?");
	$stmt51->bind_param("s",$var2);
	$stmt51->execute();
	$result51=$stmt51->get_result();
	
	$stmt52=$conn->stmt_init();
	$stmt52=$conn->prepare("SELECT PEOPLENUM3 FROM SUBJECT WHERE NUMBER =?");
	$stmt52->bind_param("s",$var2);
	$stmt52->execute();
	$result52=$stmt52->get_result();
	
	
	$stmt6=$conn->stmt_init();
	$stmt6=$conn->prepare("SELECT PEOPLENUM1 FROM SUBJECT WHERE NUMBER =?");
	$stmt6->bind_param("s",$var3);
	$stmt6->execute();
	$result6=$stmt6->get_result();
	
	$stmt61=$conn->stmt_init();
	$stmt61=$conn->prepare("SELECT PEOPLENUM2 FROM SUBJECT WHERE NUMBER =?");
	$stmt61->bind_param("s",$var3);
	$stmt61->execute();
	$result61=$stmt61->get_result();
	
	$stmt62=$conn->stmt_init();
	$stmt62=$conn->prepare("SELECT PEOPLENUM3 FROM SUBJECT WHERE NUMBER =?");
	$stmt62->bind_param("s",$var3);
	$stmt62->execute();
	$result62=$stmt62->get_result();
	
	$stmt7=$conn->stmt_init();
	$stmt7=$conn->prepare("SELECT NUM FROM SUBJECT WHERE NUMBER =?");
	$stmt7->bind_param("s",$_POST["ONE"]);
	$stmt7->execute();
	$show1=$stmt7->get_result();
	
	$stmt8=$conn->stmt_init();
	$stmt8=$conn->prepare("SELECT NUM FROM SUBJECT WHERE NUMBER =?");
	$stmt8->bind_param("s",$var2);
	$stmt8->execute();
	$show2=$stmt8->get_result();
	
	$stmt9=$conn->stmt_init();
	$stmt9=$conn->prepare("SELECT NUM FROM SUBJECT WHERE NUMBER =?");
	$stmt9->bind_param("s",$var3);
	$stmt9->execute();
	$show3=$stmt9->get_result();
	
	while($info2 = mysqli_fetch_array($result4)){
		echo '<center>당신의 1순위 장바구니 과목을 각각 1순위, 2순위, 3순위에 담은 학생의 수입니다.<br></center>';
		echo "<br>";	
		echo '<center>1순위 : '.$info2['PEOPLENUM1'].'명</center>';
		echo "<br>";
	}
	
		while($info21 = mysqli_fetch_array($result41)){
		echo '<center>2순위 : '.$info21['PEOPLENUM2'].'명</center>';
		
		echo "<br>";
	}
	
		while($info22 = mysqli_fetch_array($result42)){
		echo '<center>3순위 : '.$info22['PEOPLENUM3'].'명</center>';
		echo "<br>";
	}
	while($info3 = mysqli_fetch_array($show1)){
		echo '<center>인원제한 : '.$info3['NUM'].'명</center>';
		echo "<br>";
	}
	?>
		  <input type='button' 
         value='수강신청' 
         onclick='alert("수강신청 성공!")'/>
<?php
	echo "<center>------------------------------------------------------------------------------------------------</center>";
	while($info2 = mysqli_fetch_array($result5)){
		echo '<center>당신의 2순위 장바구니 과목을 각각 1순위, 2순위, 3순위에 담은 학생의 수입니다.</center>';
		echo "<br>";
		echo '<center>1순위 : '.$info2['PEOPLENUM1'].'명</center>';
		echo "<br>";
	}
	while($info21 = mysqli_fetch_array($result51)){
		echo '<center>2순위 : '.$info21['PEOPLENUM2'].'명</center>';
		echo "<br>";
	}
	
	while($info22 = mysqli_fetch_array($result52)){
		echo '<center>3순위 : '.$info22['PEOPLENUM3'].'명</center>';
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
		echo "<center>------------------------------------------------------------------------------------------------</center>";
	while($info2 = mysqli_fetch_array($result6)){
		echo '<center>당신의 3순위 장바구니 과목을 각각 1순위, 2순위, 3순위에 담은 학생의 수입니다.<br></center>';
		echo "<br>";
		echo '<center>1순위 : '.$info2['PEOPLENUM1'].'명</center>';
		echo "<br>";
	}
	while($info21 = mysqli_fetch_array($result61)){
		echo '<center>2순위 : '.$info21['PEOPLENUM2'].'명</center>';
		echo "<br>";
	}
	
		while($info22 = mysqli_fetch_array($result62)){
		echo '<center>3순위 : '.$info22['PEOPLENUM3'].'명</center>';
		echo "<br>";
	}
	
	while($info3 = mysqli_fetch_array($show3)){
		echo '<center>인원제한 : '.$info3['NUM'].'명</center>';
		echo "<br>";
	}
		$stmt4->close();
		$stmt5->close();
		$stmt6->close();
		$stmt7->close();
		$stmt8->close();
		$stmt9->close();
		
		mysqli_close($conn);
	?>
	
		  <input type='button' 
         value='수강신청' 
         onclick='alert("수강신청 성공!")'/>




<br><br>

</form>
</body>
</html>