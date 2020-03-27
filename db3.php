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
	$name41=AES_Encode('정셋임',$key_name);$name42=AES_Encode('김범준',$key_name);
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


?>

<?php
    $con=mysqli_connect("localhost","root","","sugangdream")
	or die("접속 실패");

	
	$sql="
	    INSERT INTO INFORMATION VALUES
('$name1',   '1771000',   SHA2('skdud',512),          '사이버보안',   '00000', '00000', '00000' ),
('$name2',   '1771001',   SHA2('alsgus99',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name3',   '1771002',   SHA2('ehdus87',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name4',   '1771003',   SHA2('codus123',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name5',   '1771004',   SHA2('wlsdud12',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name6',   '1771005',   SHA2('dnwls1',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name7',   '1771006',   SHA2('rufrud',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name8',   '1771007',   SHA2('tjddn55',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name9',   '1771008',   SHA2('sooo12',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name10',   '1771009',   SHA2('wltjd88',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name11',   '1771010',   SHA2('woghks12',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name12',   '1771011',   SHA2('rollcccc',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name13',   '1771012',   SHA2('choi',512),           '사이버보안',   '00000', '00000', '00000' ),
('$name14',   '1771013',   SHA2('alsk2131',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name15',   '1771014',   SHA2('eognl',512),          '사이버보안',   '00000', '00000', '00000' ),
('$name16',   '1771015',   SHA2('wlgns33',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name17',   '1771016',   SHA2('ksj',512),            '사이버보안',   '00000', '00000', '00000' ),
('$name18',   '1771017',   SHA2('soooom',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name19',   '1771018',   SHA2('eksldpf53',512),      '사이버보안',   '00000', '00000', '00000' ),
('$name20',   '1771019',   SHA2('tjddns7',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name21',   '1771020',   SHA2('parknr53',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name22',   '1771021',   SHA2('qwer1234',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name23',   '1771022',   SHA2('ming132',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name24',   '1771023',   SHA2('dodo111',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name25',   '1771024',   SHA2('ewha111',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name26',   '1771025',   SHA2('korean133',512),      '사이버보안',   '00000', '00000', '00000' ),
('$name27',   '1771026',   SHA2('hhj0314',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name28',   '1771027',   SHA2('lulla1',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name29',   '1771028',   SHA2('seoul00',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name30',   '1771029',   SHA2('rose33',512),         '사이버보안',   '00000', '00000', '00000' ),
('$name31',   '1771030',   SHA2('chef333',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name32',   '1771031',   SHA2('actor111',512),       '사이버보안',   '00000', '00000', '00000' ),
('$name33',   '1771032',   SHA2('hihihi1',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name34',   '1771033',   SHA2('lawyer1',512),        '사이버보안',   '00000', '00000', '00000' ),
('$name35',   '1771034',   SHA2('limhj11',512),        '컴퓨터공학',   '00000', '00000', '00000' ),
('$name36',   '1771035',   SHA2('jojojo11',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name37',   '1771036',   SHA2('knife4444',512),      '수학',   '00000', '00000', '00000' ),
('$name38',   '1771037',   SHA2('mimi9278',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name39',   '1771038',   SHA2('jotni1324',512),      '건축학',   '00000', '00000', '00000' ),
('$name40',   '1771039',   SHA2('ilovecar13',512),     '환경공학',   '00000', '00000', '00000' ),
('$name41',   '1771040',   SHA2('alsckdcjs90',512),    '화학신소재공학',   '00000', '00000', '00000' ),
('$name42',   '1771041',   SHA2('kick486',512),        '전자전기공학',   '00000', '00000', '00000' ),
('$name43',   '1771042',   SHA2('hahaha910311',512),   '컴퓨터공학',   '00000', '00000', '00000' ),
('$name44',   '1771043',   SHA2('mj920113',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name45',   '1771044',   SHA2('gummy9228',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name46',   '1771045',   SHA2('jaelee222',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name47',   '1771046',   SHA2('werther777',512),     '컴퓨터공학',   '00000', '00000', '00000' ),
('$name48',   '1771047',   SHA2('jychun0_0',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name49',   '1771048',   SHA2('rnseo1004',512),      '컴퓨터공학',   '00000', '00000', '00000' ),
('$name50',   '1771049',   SHA2('wlslwlsl123',512),    '컴퓨터공학',   '00000', '00000', '00000' ),
('$name51',   '1771050',   SHA2('wnslwnsl456',512),    '컴퓨터공학',   '00000', '00000', '00000' ),
('$name52',   '1771051',   SHA2('misslee5959',512),    '컴퓨터공학',   '00000', '00000', '00000' ),
('$name53',   '1771052',   SHA2('algus97',512),        '컴퓨터공학',   '00000', '00000', '00000' ),
('$name54',   '1771053',   SHA2('com0930',512),        '컴퓨터공학',   '00000', '00000', '00000' ),
('$name55',   '1771054',   SHA2('kyhee3433',512),      '기후에너지시스템공학',   '00000', '00000', '00000' ),
('$name56',   '1771055',   SHA2('tndus123',512),       '컴퓨터공학',   '00000', '00000', '00000' ),
('$name57',   '1771056',   SHA2('codnjs1231',512),     '컴퓨터공학',   '00000', '00000', '00000' ),
('$name58',   '1771057',   SHA2('rlwnsl1',512),        '화학신소재공학',   '00000', '00000', '00000' ),
('$name59',   '1771058',   SHA2('wooooo1',512),        '컴퓨턱공학',   '00000', '00000', '00000' ),
('$name60',   '1771059',   SHA2('wooooo1',512),        '건축도시시스템공학',   '00000', '00000', '00000' ),
('$name61',   '1771060',   SHA2('myungmee2',512),      '수학',   '00000', '00000', '00000' )



   ";
	$ret= mysqli_query($con,$sql);
	if($ret){
		echo "INFORMATION에 정보가 입력됨";
	}
	else {
		echo "데이터베이스 생성 실패"."<br>";
		echo "실패 원인 :".mysqli_error($con);
	}

	mysqli_close($con);
?>
