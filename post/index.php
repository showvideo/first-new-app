<?php
  require('../parts/head.php');
  require('../func/function.php');
?>
<div style = "display:inline-block;border:ridge;margin-left:420px;width:450px;">

    <a style="font-size:25px;text-align;center;">投稿作成</a>
    <div style = "margin-left:10px;width:403px;padding-left:20px;">
     
    <form action="" method="post">
      名前<input type="text" name="name">
      歳<input style="width:30px;" type="text" name="old">
      お住まい<?php require('../parts/prefecturs.php'); ?>
      コメント<textarea name="message" rows="4" cols="40"><\textarea>
      <input type="submit" value="新規投稿">
    </form>

    </div>
</div>
      
    <div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:194px;">
    <a style="text-align:center;">ーﾀｲﾄﾙー<\a></br>
    <div>
        <?php
        require('../parts/anime_title.php');
        ?>
    </br>
  </div>
</div>
