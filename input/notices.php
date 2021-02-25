<?php require_once("../parts/head.php"); ?>
<?php require_once("../parts/header.php"); ?>  
<?php require_once("../common/function.php"); ?>
<?php $id = getInfomation(); ?>

<?php
try {

  $db = getDB();
  $stt = $db->prepare("select notices from user where id=:id");
  $stt->bindParam(':id', $id);
  $stt->execute();
  while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    $notices = $row['notices'];
  }
} catch (PDOException $e) {
  echo "ｴﾗｰﾒｯｾｰｼﾞ:{$e->getMessage()}";
}
?> 
<div style="width:500px;height:350px;margin-left:30px;margin-top:30px;border:solid 1px gray;padding:40px;display:inline-block;">

<form action="" method="post">
    <h4>退所時間</h4>
    <?php if(isset($notices)){
      echo "現在入力されている特記事項、\n".$notices;
} ?>
  <div class="form-group" style="margin-top:40px;">
    
  <textarea name="notices"></textarea>
    <small id="emailHelp" class="form-text text-muted">特記事項を入力してください</small>

  <div class="form-group form-check">

  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:340px;">編集</button>
</form>
</div>
<?php
if(isset($_POST['notices'])){
 
try {
    $sql = "UPDATE user SET notices = :notices where id = :id";
    $stt = getDB()->prepare($sql);
    $stt->bindParam(':notices', $_POST['notices']);
    $stt->bindParam(':id', $id);
    $stt->execute();
    header('Location: https://first-new-app1.herokuapp.com/');
} catch (PDOException $e) {
    echo "ｴﾗｰﾒｯｾｰｼﾞ:{$e->getMessage()}";
}
  
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

