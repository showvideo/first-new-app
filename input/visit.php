<?php require_once('../parts/head.php'); ?>
<?php require_once('../common/function.php'); ?>
<?php require_once('../parts/header.php'); ?>
<?php $id = getInfomation(); ?>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">入所時間</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">時間を入力してください</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if(isset($_POST['btn-primary'])) {

try {
    $sql = "UPDATE users SET visit = :visit where id = :id";
    $stt = getDB()->prepare($sql);
    $stt->execute(array(':visit' => $_POST['form-control'], ':id' => $id));
    $stt->execute();
    header('Location: https://animech2.herokuapp.com/');
} catch (PDOException $e) {
    echo "ｴﾗｰﾒｯｾｰｼﾞ:{$e->getMessage()}";
}
}
?>
