<?php require_once('../parts/head.php'); ?>
<?php require_once('../common/function.php'); ?>
<?php require_once('../parts/header.php'); ?>
<?php $id = getInfomation(); ?>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">入所時間</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">時間を入力してください</small>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
try {
    $sql = "UPDATE users SET visit = :visit where id = :id";
    $stt = getDB()->prepare($sql)
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->bindParam(':visit', $visit, PDO::PARAM_STR);
    $stt->execute();
    header('Location: https://animech2.herokuapp.com/');
} catch (PDOException $e) {
    echo "ｴﾗｰﾒｯｾｰｼﾞ:{$e->getMessage()}";
}
?>
