<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CLOUD FROW送信確認</title>
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
				<h2><img src = "images/icon_bird.png" alt = "とりアイコン">お申し込みフォーム(確認画面)</h2>
				<div class="cloud">
					<img class="cloud_4" src = "images/cloud1.png" alt = "くも">
					<img class="cloud_5" src = "images/cloud2.png" alt = "くも">
					<img class="cloud_6" src = "images/cloud3.png" alt = "くも">
				</div>
					<!--確認画面-->
					
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
	
	$okflg=true;
	
	if($yourname==''){
		echo '<p>お名前が入力されていません</p>';
		$okflg=false;
		}else{
		echo '<p>お名前</p>';
		echo $yourname ;
		echo '<br>';
		}
		
	if(preg_match('/\A[\w\-\.]+\@[\w\-\.]+\.([a-z]+)\z/',$email)==0){
		echo '<p>メールアドレスを正確に入力してください。</p>';
		$okflg=false;
		}else{
		echo '<p>メールアドレス</p>';
		echo $email ;
		}
		
	if(preg_match('/\A\d{2,5}-?\d{2,5}-?\d{4,5}\z/',$telno)==0){
		echo '<p>電話番号を正確に入力してください。</p>';
		$okflg=false;
		}else{
		echo '<p>電話番号</p>';
		echo $telno ;
		echo '<br>';
		}
		
	if($food==''){
		echo '<p>選択されていません</p>';
		$okflg=false;
		}else{
		echo '<p>好きな食べ物</p>';
		echo $food ;
		}
		
	if($messege==''){
		echo '<p>お問い合わせ内容を入力してください。</p>';
		$okflg=false;
		}else{
		echo '<p>お問い合わせ内容</p>';
		echo $messege ;
		echo '<br>';
		}
	if($okflg==true){
		echo'<form method="post" action="send_done.php">';
		echo'<input type="hidden" name="yourname" value="'.$yourname.'">';
		echo'<input type="hidden" name="email" value="'.$email.'">';
		echo'<input type="hidden" name="telno" value="'.$telno.'">';
		echo'<input type="hidden" name="food" value="'.$food.'">';
		echo'<input type="hidden" name="messege" value="'.$messege.'">';
		echo'<p><input class="tomail" type="button" onclick="history.back()" value="戻る"></p>';
		echo'<p><input class="tomail" type="submit" value="送信"></p>';
		echo'</form>';
		}else{
		echo'<form>';
		echo'<p><input class="tomail" type="button" onclick="history.back()" value="戻る"></p>';
		echo'</form>';
		}
		
?>
				
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