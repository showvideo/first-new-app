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
      お住まい<input style="width:60px;" type="text" name="prefecture"></br>
      コメント<textarea name="message" rows="4" cols="40"><\textarea>
      <input type="submit" value="新規投稿">
    </form>

    </div>

</div>
