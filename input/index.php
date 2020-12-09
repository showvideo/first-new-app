<body style="border:ridge;width:500px;">
<?php require_once('../func/function.php'); ?>
<?php $id = getInfomation(); ?>

<?php
  
  $visit = $_POST['visit'];
  $exit = $_POST['exit'];
  $vital = $_POST['vital'];
  $bath = $_POST['bath'];
  $meal = $_POST['meal'];
  $notiices = $_POST['notices'];

?>
<form action="" method="post">
<?php if(!isset($user['visit'])) { echo null; } else {?> 来所:<input type="text" name="visit"></br> <?php } ?> 
<?php if(isset($_POST['submit'])) { 
  $sql = 'UPDATE user SET visit=:visit WHERE id= :id';
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $stmt->bindParam(':visit', $visit, PDO::PARAM_STR);
  $stmt->execute();
}
?>
<?php if(isset($user['exit'])) { echo null; } else {?>退所:<input type="text" name="exit"></br> <?php } ?> 
<?php if(isset($user['vital'])) { echo null; } else {?> バイタル:<input type="text" name="vital"></br> <?php } ?>
<?php if(isset($user['bath'])) { echo null; } else {?> 入浴:<input type="text" name="bath"></br> <?php } ?>
<?php if(isset($user['meal'])) { echo null; } else {?> 食事:<input type="text" name="meal"></br> <?php } ?>
<?php if(isset($user['notices'])) { echo null; } else {?>特記事項:<input type="text" name="notices"></br> <?php } ?>
<input type="submit" name="submit" value="送信"> 
</form>
</body>
