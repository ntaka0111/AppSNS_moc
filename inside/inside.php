<?php

require('../dbconnect.php');

//投稿を取得する。  
  $sql=sprintf('SELECT article.title,article.content FROM article');
  mysqli_query($db,$sql)or die (mysqli_error($db));


//自作関数　htmlspecialcharsのショートカット
  function h($value){
  return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
  }



	$title='';
  	if(isset($_POST['title'])){
		$title=$_POST['title'];
	}

	$content='';
  	if(isset($_POST['content'])){
		$content=$_POST['content'];
	}

  ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AppSNS TOP</title>
	<link rel="stylesheet" type="text/css" href="inside.css">
		<script src="../jquery-2.1.4.min.js"></script>
	<body>
		<div class="main">
			
			<!-- サイドバー -->
			<div class="sidebar">
				<a href="../../AppSNS/profile/profile.html"><img src="../../AppSNS/image/sushi.jpg" class="profile-icon"></a>
				<div class="profile">

					<ul>
						<li><h4>お寿司</h4></li>
						<li><p>Apple JAPAN Inc. → 金融系IT</p></li>
					</ul>

					<div class="follow">
						<div class="f-f">
							<a href="#">
								<div class="following">
									<div class="follow-count"><h4>36</h4></div>
									<div class="follow-caption"><p>フォロワー</p></div>
								</div>
							</a>

							<a href="#">
								<div class="follower">
									<div class="follow-count"><h4>18</h4></div>
									<div class="follow-caption"><p>フォロワー</p></div>
								</div>
							</a>
						</div>
					</div>
				</div>



				<!-- カテゴリ -->
				<div class="category">

					<script>
					$(function() {
						var acc = $(".category-top");

						$("> dd", acc).hide();

						$("> dt", acc).addClass("active");

						$("> dt", acc).hover(function(){
							$(this).addClass("hover");
						}, function(){
							$(this).removeClass("hover");
						})

					.click(function(){
						if( $(this).next("dd").css("display")=="none"){

							$("> dd", acc).slideuo("fast");

							$("> dt.active", acc).removeClass("active");

							$(this).addClass("active").next("dd").slideDown("fast");
						}
						
						})

					});
					</script>


					<!-- カテゴリ選択 -->
					<dl class="category-top">
					<h4>カテゴリ</h4>

						<dt class="game">
							<p>　ゲーム</p>
						</dt><!-- game -->
							<dd><p>RPG</p></dd>
							<dd><p>アクション</p></dd>
							<dd><p>パズル</p></dd>
							<dd><p>スポーツ</p></dd>

						<dt class="map">
							<p>　地図</p>
						</dt><!-- traffic -->
							<dd><p>MAP</p></dd>
							<dd><p>乗換案内</p></dd>
							<dd><p>グルメ</p></dd>
							<dd><p>トラベル</p></dd>

						<dt class="everyday">
							<p>　日常</p>
						</dt><!-- camera -->
							<dd><p>カメラ</p></dd>
							<dd></dd>
							<dd></dd>
							<dd></dd>

						<dt class="study">
							<p>　学習</p>
						</dt><!-- study -->
							<dd><p>語学</p></dd>
							<dd><p>プログラミング</p></dd>
							<dd><p>受験</p></dd>

					</dl><!-- category-top -->

				</div><!-- category -->
					
				
			</div><!-- sidebar -->

			<div class="kiji">
				<div class="">
					<div class="post">

						<div class="post-top">
								<img src="../image/IMG_6910.jpg">
								<div class="top-content">
								<h2><?php echo h($title);?></h2>
								<p><?php echo h($content);?></p></div>

						</div>
<!-- ここから -->
						  	<div id="main">

								<div id="gallery">
									<div id="slides">
										<div class="slide"><img src="../image/IMG_6910.jpg" /></div>
										<div class="slide"><img src="../image/IMG_6914.jpg" /></div>
										<div class="slide"><img src="../image/IMG_6915-1.jpg" /></div>
										<div class="slide"><img src="../image/IMG_6915-2-1.jpg" /></div>
										<div class="slide"><img src="../image/IMG_6917-1.jpg" /></div>
										<div class="slide"><img src="../image/IMG_6928-1.jpg" /></div>
									</div><!-- slides -->

									<div id="menu" style="padding-bottom: 40px;">
										<ul>
										<li class="fbar">&nbsp;</li>
										<li class="menuItem"><a href=""><img src="../image/IMG_6910.jpg" /></a></li>
										<li class="menuItem"><a href=""><img src="../image/IMG_6914.jpg" /></a></li>
										<li class="menuItem"><a href=""><img src="../image/IMG_6915-1.jpg" /></a></li>
										<li class="menuItem"><a href=""><img src="../image/IMG_6915-2-1.jpg" /></a></li>
										<li class="menuItem"><a href=""><img src="../image/IMG_6917-1.jpg" /></a></li>
										<li class="menuItem"><a href=""><img src="../image/IMG_6928-1.jpg" /></a></li>
										</ul>
									</div>"<!-- menu -->
								</div><!-- gallery -->

							</div><!-- main -->

<!-- 							ここまで -->

						  <h1>『ペコッター』登録不要で使える！3分でオススメの飲食店をクチコミで教えてくれるアプリが登場</h1>
						  <p>
						    こんにちは、SHANです。
							そろそろ忘年会のシーズンということで、会場となるお店探しに手間取っている方もいらっしゃるのではないでしょうか。
							そこで今回は、チャット上でいくつかの質問をするだけで自分に合ったお店をカンタンに探せてしまうアプリ『ペコッター』をご紹介します。
							メールアドレスの登録や会員登録などの面倒な手順を踏まずに今すぐ利用することができちゃいますよ〜！</p><br>
						    <br>

						    <h3>チャット上でいくつか質問をするだけ！</h3><br>
						    <img src="../image/IMG_6910.jpg"><br>
						    <p>
						    	『ペコッター』ではメールアドレスやSNSの連携などを必要とせず<br>
								・ニックネーム<br>
								・年齢<br>
								・利用する地域<br>
								・の項目を入力するだけで今スグ利用できるんです。<br>
						    <p>


						  

						  <div class="comment">
						    <h3>Aさん</h3>
						    <p>
						      記事１へのコメントです。<br>
						      記事１へのコメントです。<br>
						    </p>
						  </div>
						  <div class="comment">
						    <h3>Bさん</h3>
						    <p>
						      記事１へのコメントです。
						    </p>
						  </div>
						  <p class="commment_link">
						    投稿日：2011/6/7
						    <a href="#">コメント</a>
						  </p>
					</div>
				</div>
			</div><!-- kiji -->


			<!-- ヘッダー -->
			<header>
				<div class="header-design">
					<img src="../../AppSNS/image/logo2_white.png">
				</div>
			</header><!-- header -->



		</div><!-- main -->
	</body>
</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/form.js"></script>


