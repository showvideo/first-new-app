
<?php require_once('../func/function.php'); ?>
<?php $id = getInfomation(); ?>

<?php
  
  $visit = $_POST['visit'];
  /*$exit = $_POST['exit'];*/
  $vital = $_POST['vital'];
  $bath = $_POST['bath'];
  $meal = $_POST['meal'];
  $notices = $_POST['notices'];
  echo $id;
?>
<form action="" method="post">
<?php if(isset($user['visit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">来所:<input type="text" name="visit"></br></div> <?php } ?> 

<?php /*if(isset($user['exit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">退所:<input type="text" name="exit"></br></div> <?php } */?> 
<?php if(isset($user['vital'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">バイタル:<input type="text" name="vital"></div></br> <?php } ?>
<?php if(isset($user['bath'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">入浴:<input type="text" name="bath"></br></div> <?php } ?>
<?php if(isset($user['meal'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">食事:<input type="text" name="meal"></br></div> <?php } ?>
<?php if(isset($user['notices'])) { echo null; } else {?><div style="display:inline-block;border:ridge;width:490px;height:600px;">特記事項:<input type="text" name="notices"></br></div> <?php } ?>
<input type="submit" name="submit" value="送信"> 　
</form>
<?php if(isset($_POST['submit'])) { 
  /*$sql = "SELECT id FROM user WHERE id=:id";
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $result = $stmt->execute()
  return $result; 
}*/
  
  /*$sql = "INSERT INTO user(id,visit,vital,bath,meal,notices) VALUES(:id,:visit,:vital,:bath,:meal,:notices)"; */
  $sql = "UPDATE user SET visit=:visit,vital=:vital,bath=:bath,meal=:meal,notices=:notices WHERE id= ':id' ";
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $stmt->bindParam(':visit', $visit, PDO::PARAM_STR);
  /*$stmt->bindParam(':exit', $exit, PDO::PARAM_STR);*/
  $stmt->bindParam(':vital', $vital, PDO::PARAM_STR);
  $stmt->bindParam(':bath', $bath, PDO::PARAM_STR);
  $stmt->bindParam(':meal', $meal, PDO::PARAM_STR);
  $stmt->bindParam(':notices', $notices, PDO::PARAM_STR);
  $stmt->execute();
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>
</body>
