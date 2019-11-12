<html>
<title>로그인 실패</title>
<body>
<center>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysqli_connect("localhost","root","","sugangdream");
		if(!$conn){
			die("Connection failed : ".mysqli_connect_error());
		}
		$password=$_POST["password"];
		$sql="SELECT password FROM INFORMATION WHERE user_id='".$_POST["user_id"]."'";
		$result=mysqli_query($conn,$sql);
		if($result){
			while ($row=mysqli_fetch_array($result)){
				if($row["password"]==hash('sha512',"$password")){
					echo "<meta http-equiv='refresh'content='0;url=form3.php'/>";
					session_start();
					$_SESSION['user_id']=$_POST['user_id'];
				} else{
					echo "<br><b>로그인 실패</b><br><FONT color='red'>아이디 또는 비밀번호를 다시 확인하세요.<br>
					등록되지 않은 아이디이거나, 아이디 또는 비밀번호를 잘못 입력하셨습니다.</FONT>";
					?>
					<br>
					<a href="test2.html">로그인하기</a>
					<?php
				}
			}
			if(mysqli_num_rows($result)==0){
				echo "<br><b>로그인 실패</b><br><FONT color='red'>아이디 또는 비밀번호를 다시 확인하세요.<br>
				등록되지 않은 아이디이거나, 아이디 또는 비밀번호를 잘못 입력하셨습니다.</FONT>";
				?>
				<br>
				<a href="test.html">로그인하기</a>
				<?php
			}
		} else{
			echo "Result Failed";
		}
		mysqli_close($conn);
	}
?>
</body>
</html>