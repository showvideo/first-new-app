<?php
  require('../parts/head.php');
  require('../func/function.php');
?>
<div style = "display:inline-block;border:ridge;margin-left:414px;width:450px;">

    <a style="font-size:25px;text-align;center;">投稿作成</a>
    <div style = "margin-left:10px;width:403px;padding-left:20px;">
     
    <form action="" method="post">
      名前<input type="text" name="name">
      歳<input style="width:30px;" type="text" name="old"></br>
      <a style = "padding-top:20px;">お住まい<?php require('../parts/prefecturs.php'); ?></a></br>
      <a style="padding-top:30px;">コメント<br>
        <input type="text" name="comment"></br>

      アニメタイトル予測変換機能をつける<input type="text" name="title"></br>
      <input type="submit" value="新規投稿"></br>      
    </form>
    
    <?php
      try{
        
        $name = $_POST['name'];
        $old = $_POST['old'];
        $comment = $_POST['comment'];


        $sql = 'INSERT INTO user(name,old,comment)
                VALUES(:name,:old,:comment)';
        $stmt = getDB()->prepare($sql)
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':old', $old, PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
        $stmt->execute();
      } catch(PDOException $e) {
        exit('ﾃﾞｰﾀﾍﾞｰｽに接続できませんでした。　' . $e->getMessage());
      }
    ?>
    </div>
</div>
      
    <div style = "display:inline-block;vertical-align:top;height:700px;width:184px;">
    <a style="text-align:center;">ーﾀｲﾄﾙー<a></br>
    <div>
        <?php
        require('../parts/anime_title.php');
        ?>
    </br>
  </div>
</div>
