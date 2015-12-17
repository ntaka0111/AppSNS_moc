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
	<title>AppSNS TOP</title>
	<link rel="stylesheet" type="text/css" href="top.css">
		<script src="../../AppSNS/jquery-2.1.4.min.js"></script>
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

					// .click(function(){
					// 	if( $(this).next("dd").css("display")=="none"){

					// 		$("> dd", acc).slideuo("fast");

					// 		$("> dt.active", acc).removeClass("active");

					// 		$(this).addClass("active").next("dd").slideDown("fast");
					// 	}
						
					// 	})

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


			<!-- ヘッダー -->
			<header>
				<div class="header-all">
					<div class="header-design">
						<img src="../../AppSNS/image/logo2_white.png">
						<a href="logout.php">ログアウト</a>
					</div>
				</div>
			</header><!-- header -->

			<!-- コンテンツ -->
			<div class="contents">

				<!-- 週間ランキング -->
				<div class="adds">
					<div class="main-contents">

						<!-- <ol class="ranking-table">
							<li date-target="#ranking-table" date-slide-to="0" class="active"></li>
							<li date-target="#ranking-table" date-slide-to="1"></li>
							<li date-target="#ranking-table" date-slide-to="2"></li>
						</ol> -->
						
						<img src="../../AppSNS/image/AppSNS-logo.png">

					</div>

					<div class="sub-contents1">
						<img src="../../AppSNS/image/グラブル.jpg">
					</div>
					
					<div class="sub-contents2">
						<img src="../../AppSNS/image/18.jpg">
					</div>
				</div><!-- contents -->

					<!-- 新着アプリ一覧 -->
					<div class="appli-article">
						<h3>新着アプリ一覧</h3>
						<ul>
							<li class="application" data-no="1">
								<div class="appli-image">
									<img src="../../AppSNS/image/LINE.png">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/icchy.png"></a>
											
										</li>
									</ul>
									<div class="app-tc">
										<h3>LINE</h3>
										<div class="comment"><img src="../../AppSNS/image/sushi.jpg">
												<ul>
													<li><p>〇〇さん</p></li>
													<li><p>〇〇いいね！</p></li>
												</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
									</div>
								</div>
							</li><!-- 

						 --><li class="application" data-no="2">
								<div class="appli-image">
									<img src="../../AppSNS/image/youtube.jpg">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/sushi.jpg"></a>
										</li>
									</ul>


									<div class="app-tc">
										<h3>YouTube</h3>
										<div class="comment"><img src="../../AppSNS/image/icchy.png">
											<ul>
												<li><p>〇〇さん</p></li>
												<li><p>〇〇いいね！</p></li>
											</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
											
									</div>
								</div>
							</li><!-- 

						 --><li class="application clear" data-no="3">
								<div class="appli-image">
									<img src="../../AppSNS/image/グラブル.jpg">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/icchy.png"></a>
											
										</li>
									</ul>
									<div class="app-tc">
										<h3>GRANBLUE FANTASY</h3>
										<div class="comment"><img src="../../AppSNS/image/sushi.jpg">
												<ul>
													<li><p>〇〇さん</p></li>
													<li><p>〇〇いいね！</p></li>
												</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
									</div>
								</div>
							</li><!-- 

						 --><li class="application" data-no="1">
								<div class="appli-image">
									<img src="../../AppSNS/image/gunosy.png">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/sushi.jpg"></a>
										</li>
									</ul>


									<div class="app-tc">
										<h3>グノシー</h3>
										<div class="comment"><img src="../../AppSNS/image/icchy.png">
											<ul>
												<li><p>〇〇さん</p></li>
												<li><p>〇〇いいね！</p></li>
											</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
											
									</div>
								</div>
							</li><!-- 

						 --><li class="application" data-no="2">
								<div class="appli-image">
									<img src="../../AppSNS/image/pinterest.jpg">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/icchy.png"></a>
											
										</li>
									</ul>
									<div class="app-tc">
										<h3>Pintarest</h3>
										<div class="comment"><img src="../../AppSNS/image/sushi.jpg">
												<ul>
													<li><p>〇〇さん</p></li>
													<li><p>〇〇いいね！</p></li>
												</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
									</div>
								</div>
							</li><!-- 

						 --><li class="application clear" data-no="3">
								<div class="appli-image">
									<img src="../../AppSNS/image/モンスト.png">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/sushi.jpg"></a>
										</li>
									</ul>


									<div class="app-tc">
										<h3>モンスターストライク</h3>
										<div class="comment"><img src="../../AppSNS/image/icchy.png">
											<ul>
												<li><p>〇〇さん</p></li>
												<li><p>〇〇いいね！</p></li>
											</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
											
									</div>
								</div>
							</li><!-- 

						 --><li class="application" data-no="1">
								<div class="appli-image">
									<img src="../../AppSNS/image/mercari.png">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/sushi.jpg"></a>
										</li>
									</ul>


									<div class="app-tc">
										<h3>mercari</h3>
										<div class="comment"><img src="../../AppSNS/image/icchy.png">
											<ul>
												<li><p>〇〇さん</p></li>
												<li><p>〇〇いいね！</p></li>
											</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
											
									</div>
								</div>
							</li><!-- 

						 --><li class="application" data-no="2">
								<div class="appli-image">
									<img src="../../AppSNS/image/パズドラ.png">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/icchy.png"></a>
											
										</li>
									</ul>
									<div class="app-tc">
										<h3>パズル＆ドラゴンズ</h3>
										<div class="comment"><img src="../../AppSNS/image/sushi.jpg">
												<ul>
													<li><p>〇〇さん</p></li>
													<li><p>〇〇いいね！</p></li>
												</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
									</div>
								</div>
							</li><!-- 

						 --><li class="application clear" data-no="3">
								<div class="appli-image">
									<img src="../../AppSNS/image/jumper.jpg">
									<!-- アプリイメージ -->
								</div>
								<div class="under">
									<ul>
										<li class="creater-icon">
											<a href="#"><img src="../../AppSNS/image/sushi.jpg"></a>
										</li>
									</ul>


									<div class="app-tc">
										<h3>jumper</h3>
										<div class="comment"><img src="../../AppSNS/image/icchy.png">
											<ul>
												<li><p>〇〇さん</p></li>
												<li><p>〇〇いいね！</p></li>
											</ul>
										</div>

										<div class="reason">
											<p>おすすめな理由</p>
										</div>
											
									</div>
								</div>
							</li>


						</ul>
					</div><!-- appli-article -->

			</div><!-- contents -->
		</div><!-- main -->
	</body>
</html>