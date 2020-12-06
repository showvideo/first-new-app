<?php
  require_once('../parts/head.php');
  require_once('../func/function.php');
?>

<div style = "display:inline-block;border:ridge;margin-left:414px;width:450px;">

    <a style="font-size:25px;text-align;center;">投稿作成</a>   
    <div style = "margin-left:10px;width:403px;padding-left:20px;">
     
    <form action="" method="post">
      名前 <input style="width:60px;" type="text" name="name">
      歳<input style="width:30px;" type="text" name="old"></br>
      <a style = "padding-top:20px;">お住まい<?php require('../parts/prefecturs.php'); ?></a></br>
      <a style="padding-top:30px;">コメント<br><input type="text" name="messagme">

      アニメタイトル予測変換機能をつける   
      <input type="submit" value="新規登録">
    </form>
    
    <?php
      try{
        
        $name = $_POST['name'];
        $old = $_POST['old'];
        $pref = $_POST['pref'];
        $message = $_POST['message'];
        
        $sql = 'INSERT INTO user(name,old,pref,message)
                VALUES(:name,:old,:pref,:message)';
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':old', $old, PDO::PARAM_STR);
        $stmt->bindParam(':pref', $pref, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
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
        require_once('../parts/anime_title.php');
        ?>
    </br>
  </div>
</div>
