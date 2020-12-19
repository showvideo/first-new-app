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
<?php if(isset($posts)) { ?> <div style="display:inline-block;border:ridge;width:800px;height:600px;">
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
        
        <select name="visit1">
        <option value="09:00">09:00</option>
        <option value="09:30">09:30</option>
        <option value="10:00">10:00</option>
        <option value="10:30">10:30</option>
        <option value="11:00">11:00</option>
        <option value="11:30">11:30</option>
        <option value="12:00">12:00</option>
        </select>
        <input type="submit" name="submit10" value="送信" style="margin-left:400px;margin-top:400px;">
    </form>
    <?php  } else {echo null;} ?> 

<?php if(isset($post10)) { ?> <div style="display:inline-block;border:ridge;width:575px;height:600px;position:relative;">
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
    <h3 style="padding-left:20px;font-size:30px;"><?php echo $name."様"; ?></h3></br>
        <a style="padding-left:40px;font-size:20px;">来所時間</br>
<input type="text" placeholder="<?php echo $visit; ?>"></br>
<form action="" method="post">
<input type="submit" name="edit" value="編集" style=" position:absolute;bottom:5px;right:5px;"></form>
<input type="submit" name="delete" value="削除">
</div><?php  } else {echo null;} ?> 

<!--バイタル-->
<?php if(isset($post2)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">
    <?php
       $sql = "SELECT id, name, visit, vital, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        $vital = $user['vital'];
        }
    ?>
    <h3><?php echo $name."様"; ?></h3></br>
    バイタル</br>
    <form action="" method="post">
        最高血圧(mmHg)<input type="text" name="vital1" style="width:40px;">/最小血圧(mmHg)<input type="text" name="vital2" style="width:40px;">脈拍/分<input type="text" name="vital3" style="width:40px;">
        <input type="submit" name="submit20" value="送信" style="margin-left:400px;margin-top:400px;">
    </form>
    <?php  } else {echo null;} ?> 




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

<?php if(isset($post21)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">入浴:<input type="text" name="bath"></br>
<input type="submit" name="submit2" value="送信"> 　</div> <?php } else { echo null; } ?>

<?php if(isset($post3)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">食事:<input type="text" name="meal"></br>
<input type="submit" name="submit3" value="送信"></div> <?php } else { echo null; } ?>

<?php if(isset($post4)) { ?><div style="display:inline-block;border:ridge;width:490px;height:600px;">特記事項:<input type="text" name="notices"></br>
<input type="submit" name="submit4" value="送信"> 　</div> <?php } else { echo null;} ?>

</form>
<?php if(isset($_POST['submit10'])) { 
  
  $sql = 'UPDATE user SET visit=:visit WHERE id=:id';
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':visit', $_POST['visit1'], PDO::PARAM_STR);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
  $stmt->execute();
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
<?php if(isset($_POST['submit20'])) { 
  
  $sql = 'UPDATE user SET vital=:vital WHERE id=:id';
  $stmt = getDB()->prepare($sql);
  $stmt->bindParam(':vital', $_POST['vital1'], PDO::PARAM_STR);
  $stmt->bindParam(':vital', $_POST['vital2'], PDO::PARAM_STR);
  $stmt->bindParam(':vital', $_POST['vital3'], PDO::PARAM_STR);
  $stmt->bindParam(':id', $id, PDO::PARAM_STR);
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
