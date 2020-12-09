
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
<?php if(!isset($user['visit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:500px;">来所:<input type="text" name="visit"></br></div> <?php } ?> 
<?php if(isset($_POST['submit'])) { 
  $sql = 'UPDATE user SET visit=:visit WHERE id= :id';
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $stmt->bindParam(':visit', $visit, PDO::PARAM_STR);
  $stmt->execute();
}
?>
<?php if(isset($user['exit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:500px;">退所:<input type="text" name="exit"></br></div> <?php } ?> 
<?php if(isset($user['vital'])) { echo null; } else {?> バイタル:<input type="text" name="vital" pattern="^[0~9]+$"></br> <?php } ?>
<?php if(isset($user['bath'])) { echo null; } else {?> 入浴:<input type="text" name="bath"></br> <?php } ?>
<?php if(isset($user['meal'])) { echo null; } else {?> 食事:<input type="text" name="meal"></br> <?php } ?>
<?php if(isset($user['notices'])) { echo null; } else {?>特記事項:<input type="text" name="notices"></br> <?php } ?>
<input type="submit" name="submit" value="送信"> 
</form>
</body>
