<?php

require('../dbconnect.php');

//投稿を取得する。  
  $sql=sprintf('SELECT article.title,article.content,article.one_article,article.icon FROM article ORDER BY article.created DESC');
  $article=mysqli_query($db,$sql)or die (mysqli_error($db));


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

	$icon='';
  	if(isset($_POST['icon'])){
		$icon=$_POST['icon'];
	}
  
  	$comment='';
  	if(isset($_POST['comment'])){
		$comment=$_POST['comment'];
	}

  if(!empty($_POST)){
//  メッセージが入力されていた時
       if($_POST['comment']!='')
       {   
       $sql=sprintf('INSERT INTO comment SET comment="%s",created=NOW()',

        mysqli_real_escape_string($db,$_POST['comment'])
        );
        
        mysqli_query($db,$sql)or die (mysqli_error($db));
        
        header('Location:inside.php');
        exit();
        }
    }

    //コメントを取得する。  
  $sql=sprintf('SELECT comment.comment FROM comment ORDER BY comment.created DESC');
  $comments=mysqli_query($db,$sql)or die (mysqli_error($db));


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
				<?php
				while($post=mysqli_fetch_assoc($article)):?>
					<div class="post">

						<div class="post-top">

								<img src="./inside_pic/<?php echo h($icon);?>">
								<div class="top-content">
								<h2><?php echo h($title);?></h2>
								<p><?php echo h($content);?></p>
							</div>

						</div>

						<article class="posted">

							<?php echo ($one_article);?>

						</article>

						<form method="post" act="">
						<div class="comment-choice">
							<img src="../image/icchy.png">
							
							<textarea name="comment" placeholder="コメントを書く（任意）"><?php echo h($comment);?></textarea>
							<div class="aaa"><input class="comment-start" type="submit" value="コメント" name="submit"></div>
						</div>
						</form>
						
						<?php
						while($post=mysqli_fetch_assoc($comment)):?>
						<div class="comment">
							<div class="user-icon">
							  		<img src="../image/icchy.png">
							  		<p>Daisuke Ichikawa</h>
							</div><!-- user-icon -->
								
							<div class="user-comment">
							    <p><?php echo h($post['comment']);?>
						    </div><!-- user-comment -->
						</div><!-- comment -->

						<?php
						endwhile;
						?>

						<div class="comment">
							<div class="user-icon">
							  		<img src="../image/icchy.png">
							  		<p>Daisuke Ichikawa</h>
							</div><!-- user-icon -->
							
							<div class="user-comment">
							    
							    <p>
							      Rettyさん。<br>毎日Rettyを愛用させていただいています。ひとつアプリに関して追加していただければ嬉しいなーという機能がありましたので大変恐縮ですが、おひとつご提案させてください。<br>
							      ▼要望<br>
							      相手と自分の共通の行ったお店がわかるような機能がほしいです。<br>
							      というのも、会食や友達にサプライズでお店を紹介する際にできるか限り行ったことのないお店を紹介したいと思ったからです。<br>
							    </p>
							    <p>
							      Rettyさん。<br>毎日Rettyを愛用させていただいています。ひとつアプリに関して追加していただければ嬉しいなーという機能がありましたので大変恐縮ですが、おひとつご提案させてください。<br>
							      ▼要望<br>
							      相手と自分の共通の行ったお店がわかるような機能がほしいです。<br>
							      というのも、会食や友達にサプライズでお店を紹介する際にできるか限り行ったことのないお店を紹介したいと思ったからです。<br>
							    </p>
						    </div><!-- user-comment -->
						</div><!-- comment -->


					</div><!-- post -->
					<div class="line"></div>
				<?php
				endwhile;
				?>
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


