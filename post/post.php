
<?php

require('../dbconnect.php');



   // if ($_SERVER['REQUEST_METHOD'] === 'POST'){

//  //投稿を記録する.※POST送信されたものがあるかどうか
    if(!empty($_POST)){
//  メッセージが入力されていた時
       if($_POST['title']!='' && $_POST['content']!=''){
       $sql=sprintf('INSERT INTO article SET title="%s",content="%s",one_article="%s"',
        mysqli_real_escape_string($db,$_POST['title']),
        mysqli_real_escape_string($db,$_POST['content']),
        mysqli_real_escape_string($db,$_POST['one_article'])
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
                        <h2>アプリのアイコン、タイトル、アプリの説明を記入してください</h2>
                        
                        <img alt="アプリのアイコンを選択してください" src="" style="background-color:#fff;">
                            <div class="top-content">
                                <div class="post-title">
                                <p><input type="text" name="title" size="40" placeholder="まとめのタイトル"></p>
                                </div>
                                <div class="post-content">
                                <p><textarea name="content" rows="8" cols="40" placeholder="まとめの説明（160文字以内）"></textarea></p>
                                </div>
                            </div>
                       
                    </div><!-- post-top -->
                        <div class="edit-main">
                            
                            <div class="edit-in">
                                <h2>記事の内容を書き込んでください</h2>
                                 
                                        <textarea id="src" class="ckeditor" name="one_article" rows="8" cols="40" placeholder="まとめの説明（160文字以内）"></textarea>
                                        
                                        <input class="edit-btn2" name="submit" type="submit" value="投稿する">
                                </form>
                            </div><!-- post -->
                        </div><!-- edit-main -->

                       <!--  <div id="preview"></div> -->
            </div><!-- kiji -->


        </div><!-- main -->
    </body>
</html>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/form.js"></script>
  <script src="ckeditor.js"></script><!-- テキストエリアのとこ -->


