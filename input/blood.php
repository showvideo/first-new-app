<?php require_once("../parts/head.php"); ?>
<?php require_once("../parts/header.php"); ?>  
<?php require_once("../common/function.php"); ?>
<?php $id = getInfomation(); ?>

<?php
try {

  $db = getDB();
  $stt = $db->prepare("select exits from user where id=:id");
  $stt->bindParam(':id', $id);
  $stt->execute();
  while($row = $stt->fetch(PDO::FETCH_ASSOC)) {

  }
} catch (PDOException $e) {
  echo "ｴﾗｰﾒｯｾｰｼﾞ:{$e->getMessage()}";
}
?> 
<div style="width:500px;height:350px;margin-left:30px;margin-top:30px;border:solid 1px gray;padding:40px;display:inline-block;">

<form action="" method="post">
    <h4>血圧/脈拍</h4>

  <div class="form-group" style="margin-top:40px;">
    
    <input type="text">
      
    <input type="text">
      
    <input type="text">
      
    <small id="emailHelp" class="form-text text-muted">時間を指定してください</small>

  <div class="form-group form-check">

  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:340px;">編集</button>
</form>
</div>
<?php
if(isset($_POST['exit'])){
 
try {
    $sql = "UPDATE user SET exits = :exit where id = :id";
    $stt = getDB()->prepare($sql);
    $stt->bindParam(':exit', $_POST['exit']);
    $stt->bindParam(':id', $id);
    $stt->execute();
    header('Location: https://animech2.herokuapp.com/');
} catch (PDOException $e) {
    echo "ｴﾗｰﾒｯｾｰｼﾞ:{$e->getMessage()}";
}
  
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
