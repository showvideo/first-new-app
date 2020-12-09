<body style="border:ridge;width:500px;">
<?php require_once('../func/function.php'); ?>
<?php $id = getInfomation(); ?>
<?php echo $id; ?>
<?php
  
  $visit = $_POST['visit'];
  $exit = $_POST['exit'];
  $vital = $_POST['vital'];
  $bath = $_POST['bath'];
  $meal = $_POST['meal'];
  $notiices = $_POST['notices'];

?>
<form action=""method="post">
来所<?php if(empty($user['visit'])) {?><input type="text" name="visit"> <?php } ?> 
<?php if(isset($_POST['submit'])) { 
  $sql = 'INSERT INTO user(id, visit) VALUES(:id, :visit) WHERE id = :id';
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $stmt->bindParam(':visit', $visit, PDO::PARAM_STR);
  $stmt->execute();
}
?>
退所<?php if(empty($user['exit'])) {?><input type="text" name="exit"> <?php } ?> 
バイタル<?php if(empty($user['vital'])) {?><input type="text" name="vital"> <?php } ?> 
入浴<?php if(empty($user['bath'])) {?><input type="text" name="bath"> <?php } ?> 
食事<?php if(empty($user['meal'])) {?><input type="text" name="meal"> <?php } ?> 
特記事項<?php if(empty($user['notices'])) {?><input type="text" name="notices"> <?php } ?> 
<input type="submit" name="submit" value="送信"> 
</form>
</body>
