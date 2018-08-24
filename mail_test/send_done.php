<?php
	session_start();
	session_regenerate_id(true);
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CLOUD FROW送信完了</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="style.css" charset="UTF-8">
<!--スマートフォン用の設定-->
<link rel="stylesheet" href="smapho.css" media="only screen and (max-width:599px)">
<!--ファビコン32x32-->
<link rel="shortcut icon" href="images/favi.png" type="image/vnd.microsoft.icon">
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<h1><img src = "images/home_title.png" alt = "MY PORTFORIO"></h1>
			<div class="cloud">
				<img class="cloud_1" src = "images/cloud1.png" alt = "くも">
				<img class="cloud_2" src = "images/cloud2.png" alt = "くも">
				<img class="cloud_3" src = "images/cloud3.png" alt = "くも">
			</div>
			<p><img src = "images/bird_sky.png" alt = "鳥"></p>
		</header>
		<div id="main_contents">
			<section id="inquiry_confirm">
				<h2><img src = "images/icon_bird.png" alt = "とりアイコン">お申し込みフォーム(送信完了)</h2>
				<div class="cloud">
					<img class="cloud_4" src = "images/cloud1.png" alt = "くも">
					<img class="cloud_5" src = "images/cloud2.png" alt = "くも">
					<img class="cloud_6" src = "images/cloud3.png" alt = "くも">
				</div>
					<!--送信画面-->
					<div class="complete_box">
	<?php
	
	function sanitize($before){
		foreach($before as $key => $value){
			$after[$key] = htmlspecialchars($value,ENT_QUOTES,'UTF-8');
			}
			return $after;
		}
	
	$post=sanitize($_POST);
	
	$yourname=$_POST['yourname'];
	$email=$_POST['email'];
	$telno=$_POST['telno'];
	$food=$_POST['food'];
	$messege=$_POST['messege'];
	
	echo '<p>'.$yourname.'様</p>','<p>お問い合わせありがとうございました。</p>
		 <p>記載されたアドレスに自動返信メールを送りましたのでご確認ください。</p>';
		 
	$mailtext='';
	$mailtext.=$yourname."様\n\nお問い合わせありがとうございました。\n";
	$mailtext.="【お名前】 " . $yourname . "\n";
	$mailtext.="【メールアドレス】" . $email . "\n";
	$mailtext.="【電話番号】" . $telno . "\n";
	$mailtext.="【好きな食べ物】" . $food . "\n";
	$mailtext.="【お問合せ内容】" . $messege . "\n";
	$mailtext.="------------------\n";
	$mailtext.="\n";
	$mailtext.="CLOUD FROWテストページよりメールテストです。\n";
	
	
	$from_mail = "okadadaikichi22@gmail.com";
	//お客様へのメール文
	$title='お問い合わせありがとうございます。';
	
	$headers ='';
	$headers .="From: " . $from_mail . "\n";
	
	$mailtext=html_entity_decode($mailtext,ENT_QUOTES,'UTF-8');
	
	mb_language('japanese');
	mb_internal_encoding('UTF-8');
	mb_send_mail($email,$title,$mailtext,$headers);
	
	
	//自分へのメール
	$title='CLOUD FROWテストページよりお問い合わせがありました。';
	
	$headers ='';
	$headers .="From: " . $email . "\n";
	
	$mailtext=html_entity_decode($mailtext,ENT_QUOTES,'UTF-8');
	
	mb_language('japanese');
	mb_internal_encoding('UTF-8');
	mb_send_mail($from_mail,$title,$mailtext,$headers);
	

?>
			<!-- end .mw_wp_form --></div>
			<p class="to-home"><a href="index.html">HOMEへ戻る</a></p>
			</section>
		</div>
		<footer id="footer">
			<div id="page_top">
			<p class="to_top"><a href="#header"><img src="images/to_top.png" alt="ぺーじトップへ"></a></p>
			</div>
			<small>copyright Okada portforio 2016</small>
		</footer>
	</div>
<script type = "text/javascript" src = "js/jquery-2.1.3.min.js"></script>
<script type = "text/javascript" src = "js/jquery.easing.1.3.js"></script>
<script type = "text/javascript" src = "js/my_effect.js"></script>
<script type = "text/javascript" src = "js/to_top.js"></script>
</body>
</html>