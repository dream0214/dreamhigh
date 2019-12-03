<?php
	$key_name = 'nameefghijklmnopqrstuvwxyz1234';
	$key_number = 'numberfghijklmnopqrstuvwxyz5678';
	
	function AES_Encode($plain_text,$key)
	{
		return base64_encode(openssl_encrypt($plain_text, "aes-256-cbc", $key, true, str_repeat(chr(0), 16)));
	}
	$name1=AES_Encode('권승주',$key_name);$name2=AES_Encode('김연희',$key_name);
	$name3=AES_Encode('김주언',$key_name);$name4=AES_Encode('정드림',$key_name);
	$name5=AES_Encode('강민주',$key_name);$name6=AES_Encode('김준선',$key_name);
	$name7=AES_Encode('김채원',$key_name);$name8=AES_Encode('강미현',$key_name);
	$name9=AES_Encode('박정연',$key_name);$name10=AES_Encode('백주리',$key_name);
	$name11=AES_Encode('백현정',$key_name);$name12=AES_Encode('조아라',$key_name);
	$name13=AES_Encode('김주언',$key_name);$name14=AES_Encode('최지희',$key_name);
	$name15=AES_Encode('손민주',$key_name);$name16=AES_Encode('이소은',$key_name);
	$name17=AES_Encode('지수연',$key_name);$name18=AES_Encode('김소현',$key_name);
	$name19=AES_Encode('안해인',$key_name);$name20=AES_Encode('최예진',$key_name);
	$name21=AES_Encode('유현선',$key_name);$name22=AES_Encode('이은빈',$key_name);
	$name23=AES_Encode('이재용',$key_name);$name24=AES_Encode('이주은',$key_name);
	$name25=AES_Encode('임은지',$key_name);$name26=AES_Encode('정주현',$key_name);
	$name27=AES_Encode('조희주',$key_name);$name28=AES_Encode('차해진',$key_name);
	$name29=AES_Encode('최슬기',$key_name);$name30=AES_Encode('최현지',$key_name);
	$name31=AES_Encode('김효원',$key_name);$name32=AES_Encode('손지수',$key_name);
	$name33=AES_Encode('도인실',$key_name);$name34=AES_Encode('윤아람',$key_name);
	$name35=AES_Encode('채기준',$key_name);$name36=AES_Encode('이상호',$key_name);
	$name37=AES_Encode('이향숙',$key_name);$name38=AES_Encode('최병주',$key_name);
	$name39=AES_Encode('엄기준',$key_name);$name40=AES_Encode('하정우',$key_name);
	$name41=AES_Encode('정둘임',$key_name);$name42=AES_Encode('김범준',$key_name);
	$name43=AES_Encode('김영준',$key_name);$name44=AES_Encode('박현석',$key_name);
	$name45=AES_Encode('이형준',$key_name);$name46=AES_Encode('김명',$key_name);
	$name47=AES_Encode('이미정',$key_name);$name48=AES_Encode('천지영',$key_name);
	$name49=AES_Encode('조영재',$key_name);$name50=AES_Encode('박세열',$key_name);
	$name51=AES_Encode('박상수',$key_name);$name52=AES_Encode('반효경',$key_name);
	$name53=AES_Encode('오유란',$key_name);$name54=AES_Encode('최기후',$key_name);
	$name55=AES_Encode('민동보',$key_name);$name56=AES_Encode('조동섭',$key_name);
	$name57=AES_Encode('이경은',$key_name);$name58=AES_Encode('박화신',$key_name);
	$name59=AES_Encode('임윤선',$key_name);$name60=AES_Encode('김도시',$key_name);	
	$name61=AES_Encode('이지호',$key_name);	
	
	$number1=AES_Encode('1771000',$key_number);$number2=AES_Encode('1771001',$key_number);
	$number3=AES_Encode('1771002',$key_number);$number4=AES_Encode('1771003',$key_number);
	$number5=AES_Encode('1771004',$key_number);$number6=AES_Encode('1771005',$key_number);
	$number7=AES_Encode('1771006',$key_number);$number8=AES_Encode('1771007',$key_number);
	$number9=AES_Encode('1771008',$key_number);$number10=AES_Encode('1771009',$key_number);
	$number11=AES_Encode('1771010',$key_number);$number12=AES_Encode('1771011',$key_number);
	$number13=AES_Encode('1771012',$key_number);$number14=AES_Encode('1771013',$key_number);
	$number15=AES_Encode('1771014',$key_number);$number16=AES_Encode('1771015',$key_number);
	$number17=AES_Encode('1771016',$key_number);$number18=AES_Encode('1771017',$key_number);
	$number19=AES_Encode('1771018',$key_number);$number20=AES_Encode('1771019',$key_number);
	$number21=AES_Encode('1771020',$key_number);$number22=AES_Encode('1771021',$key_number);
	$number23=AES_Encode('1771022',$key_number);$number24=AES_Encode('1771023',$key_number);
	$number25=AES_Encode('1771024',$key_number);$number26=AES_Encode('1771025',$key_number);
	$number27=AES_Encode('1771026',$key_number);$number28=AES_Encode('1771027',$key_number);
	$number29=AES_Encode('1771028',$key_number);$number30=AES_Encode('1771029',$key_number);
	$number31=AES_Encode('1771030',$key_number);$number32=AES_Encode('1771031',$key_number);
	$number33=AES_Encode('1771032',$key_number);$number34=AES_Encode('1771033',$key_number);
	$number35=AES_Encode('1771034',$key_number);$number36=AES_Encode('1771035',$key_number);
	$number37=AES_Encode('1771036',$key_number);$number38=AES_Encode('1771037',$key_number);
	$number39=AES_Encode('1771038',$key_number);$number40=AES_Encode('1771039',$key_number);
	$number41=AES_Encode('1771040',$key_number);$number42=AES_Encode('1771041',$key_number);
	$number43=AES_Encode('1771042',$key_number);$number44=AES_Encode('1771043',$key_number);
	$number45=AES_Encode('1771044',$key_number);$number46=AES_Encode('1771045',$key_number);
	$number47=AES_Encode('1771046',$key_number);$number48=AES_Encode('1771047',$key_number);
	$number49=AES_Encode('1771048',$key_number);$number50=AES_Encode('1771049',$key_number);
	$number51=AES_Encode('1771050',$key_number);$number52=AES_Encode('1771051',$key_number);
	$number53=AES_Encode('1771052',$key_number);$number54=AES_Encode('1771053',$key_number);
	$number55=AES_Encode('1771054',$key_number);$number56=AES_Encode('1771055',$key_number);
	$number57=AES_Encode('1771056',$key_number);$number58=AES_Encode('1771057',$key_number);
	$number59=AES_Encode('1771058',$key_number);$number60=AES_Encode('1771059',$key_number);
	$number61=AES_Encode('1771060',$key_number);

?>

<?php
    $con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");

	
	$sql="
	    INSERT INTO INFORMATION VALUES
('$name1',   '$number1',   SHA2('skdud',512),          '사이버보안',   '00000', '00000', '00000' ),
('$name2',   '$number2',   SHA2('alsgus99',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name3',   '$number3',   SHA2('ehdus87',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name4',   '$number4',   SHA2('codus123',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name5',   '$number5',   SHA2('wlsdud12',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name6',   '$number6',   SHA2('dnwls1',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name7',   '$number7',   SHA2('rufrud',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name8',   '$number8',   SHA2('tjddn55',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name9',   '$number9',   SHA2('sooo12',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name10',   '$number10',   SHA2('wltjd88',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name11',   '$number11',   SHA2('woghks12',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name12',   '$number12',   SHA2('rollcccc',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name13',   '$number13',   SHA2('choi',512),           '사이버보안',   '00000', '00000', '00000' ),
('$name14',   '$number14',   SHA2('alsk2131',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name15',   '$number15',   SHA2('eognl',512),          '사이버보안',   '00000', '00000', '00000' ),
('$name16',   '$number16',   SHA2('wlgns33',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name17',   '$number17',   SHA2('ksj',512),            '사이버보안',   '00000', '00000', '00000' ),
('$name18',   '$number18',   SHA2('soooom',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name19',   '$number19',   SHA2('eksldpf53',512),      '사이버보안',   '00000', '00000', '00000' ),
('$name20',   '$number20',   SHA2('tjddns7',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name21',   '$number21',   SHA2('parknr53',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name22',   '$number22',   SHA2('qwer1234',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name23',   '$number23',   SHA2('ming132',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name24',   '$number24',   SHA2('dodo111',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name25',   '$number25',   SHA2('ewha111',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name26',   '$number26',   SHA2('korean133',512),      '사이버보안',   '00000', '00000', '00000' ),
('$name27',   '$number27',   SHA2('hhj0314',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name28',   '$number28',   SHA2('lulla1',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name29',   '$number29',   SHA2('seoul00',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name30',   '$number30',   SHA2('rose33',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name31',   '$number31',   SHA2('chef333',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name32',   '$number32',   SHA2('actor111',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name33',   '$number33',   SHA2('hihihi1',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name34',   '$number34',   SHA2('lawyer1',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name35',   '$number35',   SHA2('limhj11',512),        '컴퓨터공학',   '00000', '00000', '00000' ),
('$name36',   '$number36',   SHA2('jojojo11',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name37',   '$number37',   SHA2('knife4444',512),      '수학',   '00000', '00000', '00000' ),
('$name38',   '$number38',   SHA2('mimi9278',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name39',   '$number39',   SHA2('jotni1324',512),      '건축학',   '00000', '00000', '00000' ),
('$name40',   '$number40',   SHA2('ilovecar13',512),     '환경공학',   '00000', '00000', '00000' ),
('$name41',   '$number41',   SHA2('alsckdcjs90',512),    '화학신소재공학',   '00000', '00000', '00000' ),
('$name42',   '$number42',   SHA2('kick486',512),        '전자전기공학',   '00000', '00000', '00000' ),
('$name43',   '$number43',   SHA2('hahaha910311',512),   '컴퓨터공학',   '00000', '00000', '00000' ),
('$name44',   '$number44',   SHA2('mj920113',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name45',   '$number45',   SHA2('gummy9228',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name46',   '$number46',   SHA2('jaelee222',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name47',   '$number47',   SHA2('werther777',512),     '컴퓨터공학',   '00000', '00000', '00000' ),
('$name48',   '$number48',   SHA2('jychun0_0',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name49',   '$number49',   SHA2('rnseo1004',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name50',   '$number50',   SHA2('wlslwlsl123',512),    '컴퓨터공학',   '00000', '00000', '00000' ),
('$name51',   '$number51',   SHA2('wnslwnsl456',512),    '컴퓨터공학',   '00000', '00000', '00000' ),
('$name52',   '$number52',   SHA2('misslee5959',512),    '컴퓨터공학',   '00000', '00000', '00000' ),
('$name53',   '$number53',   SHA2('algus97',512),        '컴퓨터공학',   '00000', '00000', '00000' ),
('$name54',   '$number54',   SHA2('com0930',512),        '컴퓨터공학',   '00000', '00000', '00000' ),
('$name55',   '$number55',   SHA2('kyhee3433',512),      '기후에너지시스템공학',   '00000', '00000', '00000' ),
('$name56',   '$number56',   SHA2('tndus123',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name57',   '$number57',   SHA2('codnjs1231',512),     '컴퓨터공학',   '00000', '00000', '00000' ),
('$name58',   '$number58',   SHA2('rlwnsl1',512),        '화학신소재공학',   '00000', '00000', '00000' ),
('$name59',   '$number59',   SHA2('wooooo1',512),        '컴퓨턱공학',   '00000', '00000', '00000' ),
('$name60',   '$number60',   SHA2('wooooo1',512),        '건축도시시스템공학',   '00000', '00000', '00000' ),
('$name61',   '$number61',   SHA2('myungmee2',512),      '수학',   '00000', '00000', '00000' )



   ";
	$ret= mysqli_query($con,$sql);
	if($ret){
		echo "데이터베이스를 성공적으로 생성";
	}
	else {
		echo "데이터베이스 생성 실패"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}

	mysqli_close($con);
?>
