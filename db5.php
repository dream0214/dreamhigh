<?php
	$con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");
	$sql="
	INSERT INTO SUBJECT VALUES
	('Python프로그래밍및실습','38970','신공학관','김명','0','0','0','20'),
	('C프로그래밍및실습','38971','아산공학관','조동섭','0','0','0','20'),
	('객체지향프로그래밍및실습','38972','SK텔레콤관','도인실','0','0','0','20'),
	('사이버보안개론','38973','신공학관','권승주','0','0','0','30'),
	('사이버보안기초프로젝트','38974','SK텔레콤관','김준선','0','0','0','40'),
	('정수론','38975','포스코관','이향숙','0','0','0','35'),
	('현대암호기초','38976','신공학관','조국화','0','0','0','30'),
	('컴퓨터시스템','38977','아산공학관','박윤주','0','0','0','30'),
	('데이터구조및실습','38978','SK텔레콤관','이상호','0','0','0','20'),
	('악성코드및실습프로젝트','38979','SK텔레콤관','조양현','0','0','0','25'),
	('정보시스템보안','38980','신공학관','윤아람','0','0','0','35'),
	('웹보안및실습','38981','SK텔레콤관','기태현','0','0','0','30'),
	('정보통신과컴퓨터네트워크','38982','아산공학관','채기준','0','0','0','30'),
	('빅데이터보안','38983','신공학관','천지영','0','0','0','30'),
	('시큐어코딩실습프로젝트','38984','SK텔레콤관','전영재','0','0','0','25'),
	('블록체인응용','38985','포스코관','박세열','0','0','0','30'),
	('정보사회와인터넷윤리','38986','포스코관','임성수','0','0','0','30'),
	('건축컴퓨터프로그래밍및실습','38987','신공학관','엄기준','0','0','0','20'),
	('탄소와물순환','38988','아산공학관','박화신','0','0','0','20'),
	('식품과학기초','38989','신공학관','최기후','0','0','0','25'),
	('소프트웨어공학','38990','아산공학관','박지현','0','0','0','25'),
	('미분적분학','38991','종합과학관','이지호','0','0','0','30'),
	('선형대수학','38992','종합과학관','이향숙','0','0','0','30'),
	('수리물리학','38993','종합과학관','이지호','0','0','0','30'),
	('건축시공기술및관리','38994','신공학관','김도시','0','0','0','30'),
	('도시인프라의이해','38995','신공학관','김시도','0','0','0','30'),
	('유기화학','38996','포스코관','박화신','0','0','0','30'),
	('열및물질전달','38997','아산공학관','박신화','0','0','0','30'),
	('IT융합설계개론','38998','아산공학관','민동보','0','0','0','30'),
	('운영체제','38999','신공학관','반효경','0','0','0','30')
	";
	
	$ret=mysqli_query($con,$sql);
	if($ret){
		echo "SUBJECT에 정보가 성공적으로 입력됨";
		}
	else{
		echo "데이터 입력 실패"."<br>";
		echo "실패 원인 : ".mysqli_error($con);
		}
		mysqli_close($con);
?>
