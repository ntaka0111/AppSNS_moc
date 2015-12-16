<?php
require('../dbconnect.php');
//  //投稿を記録する.※POST送信されたものがあるかどうか
if(!empty($_POST)){
//  メッセージが入力されていた時
if($_POST['message']!=''){
//  //%d...整数型のデータを置換する文字
//  //%s...文字型のデータを置換する文字
//  //SQL文では数字をダブルクォーテーションで
  $sql=sprintf('INSERT INTO Apple SET member_id=%d,title="%s",content="%s",created=NOW()',
    mysqli_real_escape_string($db,$Apple['id']),
    mysqli_real_escape_string($db,$_POST['title']),
    mysqli_real_escape_string($db,$_POST['content'])
    );
    mysqli_query($db,$sql)or die (mysqli_error($db));
    
    header('Location:post.php');
    exit();
  }
}
//投稿を取得する。  
  $sql=sprintf('SELECT article.title,article.content FROM article ORDER BY `created` DESC');
  $posts=mysqli_query($db,$sql)or die (mysqli_error($db));
//自作関数　htmlspecialcharsのショートカット
  function h($value){
  return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
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

    <form accept-charset="UTF-8" action="/lists/187234" class="edit_list" id="edit_list_187234" method="post" novalidate="novalidate" style="height:245px;"><div style="margin:0;padding:0;display:inline"><input type="hidden"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="jODrO4S+1+jVoV8dizU8pPml39gfdUQ20NBs516lIXE="></div>


         <div class="toko-menu">
            <div class="toko-menu-in">
                <select class="toko-menu-categories" name="" style="width:198px;height:36px;">
                  
                    <span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all" tabindex="0" id="list_big_category_id-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="list_big_category_id-menu" aria-haspopup="true" style="width: 200px;">
                    <span class="ui-icon ui-icon-triangle-1-s"></span>
                    <span class="ui-selectmenu-text">カテゴリを選んでね</span>
                </span>
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
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="公開する" style="background-color:#ff7f50;color:#fff;">
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="下書き保存">
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="プレビュー">
                <input class="edit-btn" data-disable-with="保存中..." name="commit" type="submit" value="記事作成">
                </div>
            </div><!-- toko-menu-in -->
        </div><!-- toko-menu -->

            <div class="toko-main">
                <div class="toko-image"><img alt="タイトルを入力してください" height="160" id="edit_list_thumbnail" src="https://assets.mery.jp/1449638204321/images/noimage.png" width="160" data-pin-nopin="true">
                </div>

                 <div class="toko-text">
                    <input id="toko-text-title" name="list[title]" placeholder="まとめのタイトル"  type="text">

                    <textarea id="toko-text-contents" name="list[description]" placeholder="まとめの説明（160文字以内）"><?php echo h($content);?></textarea>
                    <p class="toko-text-p"><span class="count">0</span>/160文字</p>
                </div>
            </div><!-- toko-main -->
        
</form>
        

        <div class="file-main">

            <form method="post" action="">
               <div class="file-button">
                <input id="file-button-input" type="file" value="ファイルを選択">
                </div>
                
                <div class="file-settei">
                <input id="file-settei-input" data-confirm="著作権や第三者の権利を侵害する画像をアップロードした場合、利用規約および関連法規により処罰を受ける可能性があります。" data-disable-with="設定中..." name="commit" type="submit" value="設定">
                </div>
            </form>
        </div>



        <div class="edit-main">
            <div class="edit-out">
                <div class="editMenu">
                    <ul class="edit-tool">
                     
                          <li class="edit-tool-text">
                          <a href="javascript:void(0);"><i class="fa fa-pencil"><p>テキスト</p></i></a>
                      </li>

                        <li class="edit-tool-image">
                          <a data-fancybox-type="ajax"><i class="fa fa-camera"><p>カメラ</p></i></a>
                        </li>

                        <li class="edit-tool-quote">
                          <a href="javascript:void(0);"><i class="fa fa-quote-left"><p>引用</p></i></a>
                        </li>

                        <li class="edit-tool-headline">
                          <a href="javascript:void(0);" ><i class="fa fa-list-ol"><p>見出し</p></i></a>

                        <li class="edit-tool-link">
                          <a href="javascript:void(0);"><i class="fa fa-globe"><p>リンク</p></i></a>
                        </li>

                        <li class="edit-tool-twitter">
                          <a data-fancybox-type="ajax"><i class="fa fa-twitter"><p>twitter</p></i></a>
                        </li>

                        <li class="edit-tool-product">
                          <a data-fancybox-type="ajax"><i class="fa fa-shopping-cart"><p>商品</p></i></a>
                        </li>

                        <li class="edit-tool-spot">
                          <a data-fancybox-type="ajax"><i class="fa fa-map-marker"><p>スポット</p></i></a>
                        </li>

                        <li class="edit-tool-movie">
                          <a href="javascript:void(0);"><i class="fa fa-youtube-play"><p>YouTube</p></i></a>
                        </li>
                    </ul>
                </div><!-- editMenu -->
                <div id="item_form_loader" class="loading" style="display: none;">
            <img src="https://assets.mery.jp/1449638204321/images/loading.8e2e8ecb.gif" alt="ローディング...">
          </div>

           <div class="new_item"></div>
           <div id="list_content"><article id="col2_article" class="articleArea editItem_area">
  <ul id="sortable" class="ui-sortable">あああああああああああああああああ
  </ul>
</article>

<script>
  if(typeof jQuery !== 'undefined') {
    jQuery(function($) {
      $('#sortable').sortable({
        handle: '.sort_icon',
        update: function(event, ui) {
          $("#item_form_loader").show();
          var new_order = $(this).sortable('toArray').toString();
          new_order = new_order.replace(/list_content,/g,'');
          new_order = new_order.split(",");
          new_order = new_order.filter(Boolean);
          $.post(
            '/items/sort_order',
            {
              'new_order': new_order,
              'list_id': 187234
            }
          );
        }
      });
      // グローバル関数としたくないため、
      // 暫定的にlist_contentと同じ処理を記載 see mery #pull/3307
      $(".delete_item").click(function () {
        if(confirm("本当に削除してよろしいですか？？")) {
          $("#new_item").html("");
          $("#item_form_loader").show();
          return true;
        } else {
          return false;
        }
      });
    });
  }
</script></div>




            </div><!-- edit-out -->
        </div><!-- edit-main -->

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