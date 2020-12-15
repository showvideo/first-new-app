<head>
    <script type="text/javascript"></script>
</head>    
<?php require_once('../func/function.php'); ?>
<?php $id = getInfomation(); ?>

<?php
  
  $visit = $_POST['visit'];
  /*$exit = $_POST['exit'];*/
  $vital = $_POST['vital'];
  $bath = $_POST['bath'];
  $meal = $_POST['meal'];
  $notices = $_POST['notices'];
  $posts = $_POST['posts'];
  $post1 = $_POST['post1'];
  $post2 = $_POST['post2'];
  $post3 = $_POST['post3'];
  $post4 = $_POST['post4'];
  $post10 = $_GET['posts'];
  echo $posts;

?>
<form action="" method="post">
<?php if(isset($posts)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">来所:<input type="text" name="visit" placeholder="<?php echo $visit; ?>"></br>
<input type="submit" name="submit" value="送信">
<?php  } else {echo null;} ?> 

<?php if(isset($post10)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">来所:<input type="text" name="visit" placeholder="<?php echo $visit; ?>"></br>
<input type="submit" name="submit" value="送信"><p><input type="submit" name="delete" value="削除"></p></div> </div> <?php  } else {echo null;} ?> 

<?php /*if(isset($user['exit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">退所:<input type="text" name="exit"></br></div> <?php } */?> 
<?php if(isset($post1)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">バイタル:<input type="text" name="vital"></div></br>
<input type="submit" name="submit1" value="送信"><?php } else { echo null;} ?>

<?php if(isset($post2)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">入浴:<input type="text" name="bath"></br>
<input type="submit" name="submit2" value="送信"> 　</div> <?php } else { echo null; } ?>

<?php if(isset($post3)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">食事:<input type="text" name="meal"></br>
<input type="submit" name="submit3" value="送信"></div> <?php } else { echo null; } ?>

<?php if(isset($post4)) { ?><div style="display:inline-block;border:ridge;width:490px;height:600px;">特記事項:<input type="text" name="notices"></br>
<input type="submit" name="submit4" value="送信"> 　</div> <?php } else { echo null;} ?>

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
<?php if(isset($_POST['delete'])) {
    $sql = "DELETE FROM user WHERE id=? AND visit=?";
    $stmt = getDB()->prepare($sql);
    $data[]=$id;
    $data[]=$visit;
    $stmt->execute();
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
