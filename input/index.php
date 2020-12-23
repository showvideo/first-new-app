<head>
    <script type="text/javascript"></script>
</head>    
<?php require_once('../common/function.php'); ?>
<?php $id = getInfomation(); ?>

<?php
  
  $visit = $_POST['visit'];
  $exit = $_POST['exits'];
  $vital = $_POST['vital'];
  $bath = $_POST['bath'];
  $meal = $_POST['meal'];
  $notices = $_POST['notices'];
  $visitTime = $_POST['visit1'];
var_dump($visitTime);
?>

<?php /*来所*/ ?>

<?php if(!empty($visitTime)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;">
    <?php
        $sql = "SELECT id, name, visit, vital, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        }
    ?>
    <h3 style="padding-left:20px;font-size:30px;"><?php echo $name."様"; ?></h3></br>
    <p style="padding-left:40px;font-size:20px;">来所時間</p></br>
    <form action="" method="post">
        <input type="text" style="width:44px;height:55px;margin-left:40px;">:
        <input type="text" style="width:44px;height:55px;">
        <input type="submit" name="submit" value="入力">
        <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;">
    </form>
    <?php  } else {echo null;} ?> 

<?php if(isset($visitTime1)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;position:relative;">
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
    <p style="padding-left:40px;font-size:20px;">来所時間</p></br>
    <input type="text" placeholder="<?php echo substr($visit, 0, 2); ?>" style="width:44px;height:55px;margin-left:40px;color:black;font-weight:bold;">:
    <input type="text" placeholder="<?php echo substr($visit, 3, 5); ?>" style="width:44px;height:55px;">
    <form action="" method="post">
    <input type="submit" name="edit" value="編集"></br>
    <a href="" name="delete" value="削除" style="margin-left:40px;">削除はこちらをクリック</a>
    <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;"></form>
    </div><?php  } else {echo null;} ?> 




<?php/*
<?php /*if(isset($user['exit'])) { echo null; } else {?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">退所:<input type="text" name="exit"></br></div> <?php } */?> 
<?php if(isset($post1)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">バイタル:<input type="text" name="vital"></div></br>
<input type="submit" name="submit1" value="送信"><?php } else { echo null;} ?>

<?php if(isset($post21)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">入浴:<input type="text" name="bath"></br>
<input type="submit" name="submit2" value="送信"> 　</div> <?php } else { echo null; } ?>

<?php if(isset($post3)) { ?> <div style="display:inline-block;border:ridge;width:490px;height:600px;">食事:<input type="text" name="meal"></br>
<input type="submit" name="submit3" value="送信"></div> <?php } else { echo null; } ?>

<!--特記事項-->
<?php if(isset($post4)) { ?><div style="display:inline-block;border:ridge;width:490px;height:600px;">特記事項:<input type="text" name="notices"></br>
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
<input type="text" placeholder="<?php echo substr($visit, 0, 2); ?>" style="width:40px;height:50px;margin-left:40px;">:
<input type="text" placeholder="<?php echo substr($visit, 3, 5); ?>" style="width:40px;height:50px;"></br>
<form action="" method="post">
<input type="submit" name="edit" value="編集" style=""></form>
<input type="submit" name="delete" value="削除"><input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:5px;">
</div><?php  } else {echo null;} ?> 


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
} */
?>

</body>
