
<?php require_once('../func/function.php'); ?>
<?php $id = getInfomation(); ?>

<?php
  
  $visit = $_POST['visit'];
  /*$exit = $_POST['exit'];*/
  $vital = $_POST['vital'];
  $bath = $_POST['bath'];
  $meal = $_POST['meal'];
  $notices = $_POST['notices'];
  $post = $_POST['post'];
  echo $id;
?>
<form action="" method="post">
<?php if(!isset($post])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">来所:<input type="text" name="visit"></br>
<input type="submit" name="submit" value="送信"> 　</div> <?php } ?> 

<?php /*if(isset($user['exit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">退所:<input type="text" name="exit"></br></div> <?php } */?> 
<?php if(isset($user['vital'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">バイタル:<input type="text" name="vital"></div></br>
<input type="submit" name="submit1" value="送信"><?php } ?>

<?php if(isset($user['bath'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">入浴:<input type="text" name="bath"></br>
<input type="submit" name="submit2" value="送信"> 　</div> <?php } ?>

<?php if(isset($user['meal'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">食事:<input type="text" name="meal"></br>
<input type="submit" name="submit3" value="送信"></div> <?php } ?>

<?php if(isset($user['notices'])) { echo null; } else {?><div style="display:inline-block;border:ridge;width:490px;height:600px;">特記事項:<input type="text" name="notices"></br>
<input type="submit" name="submit4" value="送信"> 　</div> <?php } ?>

</form>
<?php if(isset($_POST['submit'])) { 
  
  $sql = 'UPDATE user SET visit=? WHERE id=?';
  $stmt = getDB()->prepare($sql);
  $data[]=$visit;
  $data[]=$id;
  $stmt->execute($data);
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>
<?php if(isset($_POST['submit1'])) { 
  
  $sql = 'UPDATE user SET vital=? WHERE id=?';
  $stmt = getDB()->prepare($sql);
  $data[]=$vital;
  $data[]=$id;
  $stmt->execute($data);
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>
<?php if(isset($_POST['submit2'])) { 
  
  $sql = 'UPDATE user SET bath=? WHERE id=?';
  $stmt = getDB()->prepare($sql);
  $data[]=$bath;
  $data[]=$id;
  $stmt->execute($data);
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>

<?php if(isset($_POST['submit3'])) { 
  
  $sql = 'UPDATE user SET meal=? WHERE id=?';
  $stmt = getDB()->prepare($sql);
  $data[]=$meal;
  $data[]=$id;
  $stmt->execute($data);
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>

<?php if(isset($_POST['submit4'])) { 
  
  $sql = 'UPDATE user SET notices=? WHERE id=?';
  $stmt = getDB()->prepare($sql);
  $data[]=$notices;
  $data[]=$id;
  $stmt->execute($data);
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>

</body>
