<head>
    <script type="text/javascript"></script>
</head>    
<?php require_once('../common/function.php'); ?>
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

?>
<?php /*来所*/ ?>
<form action="" method="post">
<?php if(isset($posts)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">
    <?php
       $sql = "SELECT id, name, visit, vital, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];}
    ?>
    <h3><?php echo $name."様"; ?></h3></br>
    来所時間</br>
    <form action="" method="post">
        <input type="text" name="visit" style="width:100px;height:40px;"></br>
        <input type="submit" name="submit" value="送信" style="margin-left:400px;margin-top:400px;">
    </form>
    <?php  } else {echo null;} ?> 

<?php if(isset($post10)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">
   <?php
       $sql = "SELECT id, name, visit, vital, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        $visit = $user['visit'];
        }
    ?>
    <h3><?php echo $name."様"; ?></h3></br>
        来所時間:<?php echo $visit; ?></br>
<form action="" method="post">
<input type="submit" name="edit" value="編集"></form>
<input type="submit" name="delete" value="削除">
</div><?php  } else {echo null;} ?> 

<?php if(isset($_POST['edit'])) {
}
?>
<?php if(isset($_POST['delete'])) {
  
    $sql = 'UPDATE user SET visit=NULL WHERE id=:id';
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $stmt->execute();
  header('Location: https://animech2.herokuapp.com/');
  exit;
}
?>



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
    $sql = "DELETE FROM user WHERE id=? in (visit)";
    $stmt = getDB()->prepare($sql);
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
