
<?php

require('../dbconnect.php');



   // if ($_SERVER['REQUEST_METHOD'] === 'POST'){

//  //投稿を記録する.※POST送信されたものがあるかどうか
    if(!empty($_POST)){
//  メッセージが入力されていた時
       if($_POST['title']!='' && $_POST['content']!=''){
       $sql=sprintf('INSERT INTO article SET title="%s",content="%s"',
        mysqli_real_escape_string($db,$_POST['title']),
        mysqli_real_escape_string($db,$_POST['content'])
        );
        mysqli_query($db,$sql)or die (mysqli_error($db));
        
        header('Location:post.php');
        exit();
        }
    }


?>
  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AppSNS TOP</title>
    <link rel="stylesheet" type="text/css" href="post.css">
        <script src="../jquery-2.1.4.min.js"></script>
    <body>
        <div class="main">
            


            <!-- ヘッダー -->
            <header>
                <div class="header-design">
                    <img src="../../AppSNS/image/logo2_white.png">
                </div>
            </header><!-- header -->

            <div class=""></div>


             <div class="post">
                <form method="post" action="../inside/inside.php">
                <div class="toko-menu-edit">
                   <p>
                    <input class="edit-btn" name="submit" type="submit" value="投稿する">
                    </p>
                </div>                               
                                
            </div><!-- post -->

            <div class="kiji">
                
                  

                    <div class="post-top">
                        
                        <img alt="アプリのアイコンを選択してください" src="" style="background-color:#fff;">
                            <div class="top-content">
                                <div class="post-title">
                                <p><input type="text" name="title" size="40" placeholder="まとめのタイトル"></p>
                                </div>
                                <div class="post-content">
                                <p><textarea name="content" rows="8" cols="40" placeholder="まとめの説明（160文字以内）"></textarea></p>
                                </div>
                                 
                            </div>
                        </form>
                    </div><!-- post-top -->

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
                                    </div><!-- menu -->
                                </div><!-- gallery -->
                                <ul class="side-info">
                                    
                                    <li><input type="text" name=""  placeholder="カテゴリ"></li>
                                    <li><input type="text" name="" placeholder="掲載日"></li>
                                    <li><input type="text" name=""  placeholder="価格"></li>
                                    <li><input type="text" name="" placeholder="販売元"></li>
                                    <li><input type="text" name=""  placeholder="言語"></li>
                                </ul>
                            </div><!-- main -->

                            <div class="content-main">
                                  <div class="content-main-in">
                                <h2><input type="text" name="" size="50" placeholder="投稿日時"></h2>
                                <h1><input type="text" name="" size="50" placeholder="記事タイトル"></h1>
                              <p><textarea name="" rows="10" cols="100" placeholder="リード文"></textarea></p><br>
                                <br>

                                <img src="">アプリの画像<br>

                                <h2>何ができるのか</h2><br>
                                <p></p><br>


                                <h2>なぜ作ったのか</h2><br>
                                <p></p><br>

                                <h2>どのようにしていきたいのか</h2><br>
                                <p></p><br>


                                <img src="../image/IMG_6910.jpg"><br>
                                <p>
                                    『ペコッター』ではメールアドレスやSNSの連携などを必要とせず<br>
                                    ・ニックネーム<br>
                                    ・年齢<br>
                                    ・利用する地域<br>
                                    ・の項目を入力するだけで今スグ利用できるんです。<br>
                                <p>
                                    </div><!-- content-main-in -->
                            </div><!-- content-main -->


            </div><!-- kiji -->

        </div><!-- main -->
    </body>
</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/form.js"></script>


