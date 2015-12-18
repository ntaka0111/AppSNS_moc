<?php

require('../dbconnect.php');

//投稿を取得する。  
  $sql=sprintf('SELECT article.title,article.content,article.one_article FROM article');
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

    $one_article='';
  	if(isset($_POST['one_article'])){
		$one_article=$_POST['one_article'];
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
				
					<div class="post">

						<div class="post-top">
								<img src="../image/IMG_6910.jpg">
								<div class="top-content">
								<h2><?php echo h($title);?></h2>
								<p><?php echo h($content);?></p></div>

						</div>

						<article class="posted">

							<?php echo h($one_article);?>

						</article>


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


