
<?php

require('../dbconnect.php');

//  //投稿を記録する.※POST送信されたものがあるかどうか
if(!empty($_POST)){
//  メッセージが入力されていた時
 if($_POST['title']||['content']!=''){
//  //%d...整数型のデータを置換する文字
//  //%s...文字型のデータを置換する文字
//  //SQL文では数字をダブルクォーテーションで
    $sql=sprintf('INSERT INTO article SET title="%s",content="%s",created=NOW()',
        mysqli_real_escape_string($db,$_POST['title']),
        mysqli_real_escape_string($db,$_POST['content'])
        );
        mysqli_query($db,$sql)or die (mysqli_error($db));
        
        header('Location:index.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AppSNS エンジニア向けページ</title>
    <link rel="stylesheet" type="text/css" href="post.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/css/form.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/timeline.css"> -->
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

<div class="zentai">

    <form accept-charset="UTF-8" action="inside.php" method="post">
        <input name="_method" type="hidden" value="put">

         <div class="toko-menu">
            <div class="toko-menu-in">
                <select class="toko-menu-categories" style="width:198px;height:36px;">
                  <!-- 
                    <span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="list_big_category_id-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="list_big_category_id-menu" aria-haspopup="true" style="width: 200px;">
                    <span class="ui-icon ui-icon-triangle-1-s"></span>
                     -->
                <!-- </span> -->

                    <option value="">カテゴリを選択</option>

                    <option value="1">ファッション</option>
                    <option value="2">メイク・コスメ</option>
                    <option value="3">美容</option>
                    <option value="4">ヘアスタイル</option>
                    <option value="5">恋愛</option>
                    <option value="6">ライフスタイル</option>
                    <option value="7">グルメ</option>
                    <option value="8">旅行・おでかけ</option>
                    <option value="9">ネイル</option>
                </select>

                <div class="toko-menu-edit">
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="投稿する" style="background-color:#ff7f50;color:#fff;">
               <!--  <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="下書き保存">
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="プレビュー">
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="記事作成"> -->
                </div>
            </div><!-- toko-menu-in -->
        </div><!-- toko-menu -->

            <div class="toko-main">
                <div class="toko-image"><img alt="タイトルを入力してください" height="160" src="https://assets.mery.jp/1449638204321/images/noimage.png" width="160" data-pin-nopin="true">
                </div>

                 <div class="toko-text">
                    <input id="toko-text-title" name="title" placeholder="アプリの名前"  type="text" value="<?php echo $post['title']?>">

                    <textarea id="toko-text-contents" name="content" placeholder="アプリの説明（160文字以内）"><?php echo $post['content']?></textarea>
                    <p class="toko-text-p"><span class="count">0</span>/160文字</p>
                </div>
            </div><!-- toko-main -->
        
</form>
        <!-- 

        <div class="file-main">

            <form method="post" action="">
               <div class="file-button">
                <input id="file-button-input" type="file" value="ファイルを選択">
                </div>
                
                <div class="file-settei">
                <input id="file-settei-input" data-confirm="著作権や第三者の権利を侵害する画像をアップロードした場合、利用規約および関連法規により処罰を受ける可能性があります。" data-disable-with="設定中..." name="commit" type="submit" value="設定">
                </div>
            </form>
        </div> -->


</div><!-- zentai -->

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jribbble.js"></script>
    <script src="assets/js/site-ck.js"></script>


        </body>
</html>