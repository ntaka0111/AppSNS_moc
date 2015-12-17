<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AppSNS</title>
	<link rel="stylesheet" type="text/css" href="start.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
	<body>
		<header>
			<div class="container">
				<div class="header-design">
					<a href="../../AppSNS/top/top.php"><img src="../image/AppSNS-logo.png"></a>
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
		</header>

		<div class="main">
			<div class="row">
				<h1>
					<!-- <img src="../image/logo-sky.png"> -->

						 <script type="text/javascript">
						var imglist = new Array(
							"../image/AppSNS-logo.png",
							"../image/logo-orange.png",
							"../image/logo-lightpink.png",
							"../image/logo-sky.png",
							"../image/logo-lightgreen.png",
							"../image/logo-yellow.png",
							"../image/logo-grapefruit.png",
							"../image/logo-lightpurple.png",
							"../image/logo-syanblue.png",
							"../image/logo-lightbanana.png",
							"../image/logo-greenmango.png",
							"../image/logo-ryme.png",
							"../image/logo-purple.png" );
						var selectnum = Math.floor(Math.random() * imglist.length);
						var output = "<img src=" + imglist[selectnum] + ">";
						document.write(output);
						</script>
				</h1>
				<h2>
					<p><br />AppSNSはアプリケーションのキュレーションSNSです。<br /><br />AppSNSを使ってより快適なアプリケーション生活を送りませんか？<br /><br /></p>
					<a href="../general/gmain.php" class="btn general">一般の方はこちら</a>
					<a href="../programmer/pmain.php" class="btn programmer">エンジニアの方はこちら</a>
				</h2>
			</div>
		</div>


	</body>
</html>