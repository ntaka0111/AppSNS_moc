<?php

require('../dbconnect.php');

//投稿を取得する。  
  $sql=sprintf('SELECT article.id,article.title,article.content,article.one_article,article.icon FROM article ORDER BY article.created DESC');
  $articles=mysqli_query($db,$sql)or die (mysqli_error($db));


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
//  コメントが入力されていた時
       if($comment!='')
       {   
       $sql=sprintf('INSERT INTO comment SET comment="%s",article_id="%s",created=NOW()',

        mysqli_real_escape_string($db,$_POST['comment']),
        mysqli_real_escape_string($db,$_POST['article_id'])
        );
        
        mysqli_query($db,$sql)or die (mysqli_error($db));
        
        header('Location:inside.php');
        exit();
        }
    }


    ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AppSNS TOP</title>
	<link rel="stylesheet" type="text/css" href="inside.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
		<script src="../jquery-2.1.4.min.js"></script>
	<body>

		<div class="main">
			
			<!-- ヘッダー -->
			<header>
				<div class="header-design">
					<img src="../../AppSNS/image/logo2_white.png">
				</div>
			</header><!-- header -->



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
				while($article_db=mysqli_fetch_assoc($articles)):?>
					<div class="post">

						<div class="post-top">

								<img src="./inside_pic/<?php echo h($article_db['icon']);?>">
							<div class="top-content">
								<h1><?php echo h($article_db['title']);?></h1>
								<p><?php echo h($article_db['content']);?></p>
							</div>
							<div class="favorite">
							<p><i class="fa fa-heart"></i>   お気に入り</p>
						</div>
						</div>
						

						<article class="posted">

							<?php echo ($article_db['one_article']);?>

						</article>

						<form method="post" act="">
						<div class="comment-choice">
							<img src="../image/icchy.png">
							
							<textarea name="comment" placeholder="コメントを書く（任意）"><?php echo h($comment);?></textarea>
							<div class="aaa"><input class="comment-start" type="submit" value="コメント" name="submit"></div>
						
							
							<input name="article_id" type="hidden" value="<?php echo h($article_db['id']);?>"
					
						</div>
						</form>
						
						<?php

						    //コメントのデータもwhileでループしている中で取得しないといけないのでここに記載する  
							  $sql=sprintf('SELECT comment.comment FROM article LEFT JOIN comment ON article.id = comment.article_id WHERE comment.article_id = %d ORDER BY comment.created DESC',$article_db['id']);
							  $comments=mysqli_query($db,$sql)or die (mysqli_error($db));

						while($comment=mysqli_fetch_assoc($comments)):?>
						<div class="comment">
							<div class="user-icon">
							  		<img src="../image/icchy.png">
							  		<p>Daisuke Ichikawa</h>
							</div><!-- user-icon -->
								
							<div class="user-comment">
								<!-- 上記$comment(データベース)の中のcommentを引き出すので、h($comment['comment']);となる。 -->
							    <p><?php echo h($comment['comment']);?>
						    </div><!-- user-comment -->
						</div><!-- comment -->

						<?php
						endwhile;
						?>

						

					</div><!-- post -->
					<div class="line"></div>
				<?php
				endwhile;
				?>
			</div><!-- kiji -->


			

		</div><!-- main -->
	</body>
</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/form.js"></script>

