<?php
	// var_dump($_POST);
	// $error = array();
	require('../dbconnect.php');

	session_start();
	//ボタンが送信されてPOST送信されたら
	if (!empty($_POST)) 
	{
		//エラー項目の確認
		if($_POST['name'] == '')
		{
			$error['name'] = 'blank';
		}
		if($_POST['email'] == '')
		{
			$error['email'] = 'blank';
		}
		if(strlen($_POST['password'])< 4 )
		{
			$error['password'] = 'length';
		}
		if($_POST['password'] == '')
		{
			$error['password'] = 'blank';
		}
		// $fileName = $_FILES['image']['name'];
		// if(!empty($fileName))
		// {
		// 	$ext = substr($fileName, -3);
		// 	if($ext != 'jpg' && $ext != 'gif')
		// 	{
		// 		$error['image'] = 'type';
		// 	}
		// }
	
		//正常に入力されたら
		// if(empty($error)) 
		// {
		// 	画像をアップロードする
		// 	$image = date('YmdHis'). $_FILES['image']['name'];
		// 	move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/'.$image);
			
		// 	$_SESSION['join'] = $_POST;
		// 	$_SESSION['join']['image'] = $image;
			
		// 	画面遷移(画面観の移動)
		// 	header('Location: pmain.php');
		// 	exit();
		// }
		// 書き直し
		// if($_REQEST['action'] == 'rewrite')
		// {
		// 	$_POST = $_SESSION ['join'];
		// 	$error ['rewrite'] = true;
		// }
		// else
		// {
		// 	$_POST['name']='';
		// 	$_POST['email']='';
		// 	$_POST['password']='';


		// 
		// var_dump($error);
		//POST送信が押されてデータが送られてきた時
		if (empty($error))
		{
			//登録処理を行う
			$sql = sprintf(
			'INSERT INTO members SET name="%s", email="%s", password="%s", created="%s"',
			mysqli_real_escape_string($db, $_POST['account']),
			mysqli_real_escape_string($db, $_POST['email']),
			mysqli_real_escape_string($db, sha1($_POST['password'])),
			date('Y-m-d H:i:s')
			);
			mysqli_query($db, $sql) or die(mysqli_error($db));

			//SESSION変数の破棄
			unset($_SESSION['join']);

			header('Location: ../top/top.html');
			exit();
		}
	}

		

?>
<!DOCTYPE html>
<html>
<style>
@font-face {
font-family: 'nicomoji';
src:url('../../AppSNS/nicomoji-plus_1.11.ttf') format('truetype');
}

body {
font-family: '[フォント名]', sans-serif;
}
</style>
<head>
	<meta charset="utf-8">
	<title>AppSNS 一般会員向けページ</title>
	<link rel="stylesheet" type="text/css" href="gmain.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
	<body>
		
		<header>
			<div class="container">
				<div class="header-design">
					<div class="login-form">
						<img src="../image/AppSNS-logo.png">
						<form>
							<ul style="list-style:none;">
								<li>
									<input type="text" id="email" placeholder="メールアドレス">
								</li>
								<li>
									<input type="text" id="email" placeholder="パスワード">
								</li>
							</ul>
							<ul style="list-style:none;">
								<li>
									<label class="remember">
				    					<input type="checkbox" value="1" name="remember_me" checked="checked">
										<span>ログインしたままにする</span>
									</label>
									<div class="btn-login">
										<a href="#" class="btn login">ログイン</a>
									</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</header>

		<div class="top-text">
			<div class="container">
				<div class="main">
					<img src="../image/AppSNS-logo.png">
					<h1>あなたのコメントでアプリもっと素晴らしく</h1>
					<p><br />AppSNSは無料のアプリケーション共有SNSです。<br /><br />公開されているアプリケーションに対するあなたのコメントが、エンジニアにとってより良いアプリケーションを作成する糧となります。<br /><br />
					そしてあなたのコメントがより良いものであると判断されるたび、あなたにささやかなプレゼントが贈られます。</p><br /><br />
					<!-- 
					<a href="#" class="btn facebook"><span class="fa fa-facebook"></span>Facebookで登録</a>
					<a href="#" class="btn twitter"><span class="fa fa-twitter"></span>Twitterで登録</a> -->
					</div>

					<!-- JavaScript -->
					<script type="text/javascript">
					$(function(){
						// 「id="jQueryBox"」を非表示
						$("#jQueryBox").css("display", "none");
					
						// 「id="jQueryPush"」がクリックされた場合
						$("#jQueryPush").click(function(){
						// 「id="jQueryBox"」の表示、非表示を切り替える
							$("#jQueryBox").fadeIn(600);
						});
					});
					</script>
					

					
					<script type="text/javascript">
					$(function(){
						$('a[href^=#]').click(function(){
							var speed = 400;
							var href= $(this).attr("href");
							var target = $(href == "#" || href == "" ? 'html' : href);
							var position = target.offset().top;
							$("html, body").animate({scrollTop:position}, speed, "swing");
							return false;
						});
					});
					</script>


					<a href="#touroku"><div id="jQueryPush" class="btn btn-signup" input type="button" value="表示" onclick="hyoji2(0)">無料で始める</div></a>
					<div id="jQueryBox">
					    <div class="touroku">
							<a name="touroku">
								<form style="text-align:center" action="" method="post" name="signup" enctype="multipart/form-data">
									</br>
									<dt>アカウント名</dt>
									<dd><input type="text" name="name" class="span3"></dd>
									<?php if (isset($error['name']) && ($error['name'] == 'blank')): ?>
									<p class="error">ニックネームを入力してください</p>
									<?php endif; ?>

									<dt>メールアドレス</dt>
									<dd><input type="email" name="email" class="span3" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES,'UTF-8'); ?>" ></dd>
									<?php if ($error['email'] == 'blank'): ?>
									<p class="error">メールアドレスを入力してください</p>
									<?php endif; ?>
									<dt>パスワード</dt>

									<dd><input type="password" name="password" class="span3" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8'); ?>"></dd>
									<?php if ($error['password'] == 'blank'): ?>
									<p class="error">パスワードを入力してください</p>
									<?php endif; ?>
									<?php if ($error['password'] == 'length'): ?>
									<p class="error">パスワードは4文字以上で入力してください</p>
									<?php endif; ?>


									<a href="javascript:void(0)" onclick="document.signup.submit();";><div class="btn btn-signup" input type="submit" >Sign up</div></a>
								</form>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
