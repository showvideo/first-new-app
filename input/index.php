<head>
    <script type="text/javascript"></script>
</head>    
<?php require_once('../common/function.php'); ?>
<?php $id = getInfomation(); ?>

<?php
  
  $visitime = $_GET['visitime'];
  $visitime1 = $_GET['visitime1'];
  $exitime = $_GET['exitime'];
  $exitime1 = $_GET['exitime1'];
  $bloodp = $_GET['bloodp'];
  $bloodp1 = $_GET['bloodp1'];
  $noticesing = $_GET['noticesing'];
  $noticesing1 = $_GET['noticesing1'];


?>

<?php /*来所*/ ?>

<?php if(!empty($visitime)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;">
    <?php
        $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        
    ?>
    <h3 style="padding-left:20px;font-size:30px;"><?php echo $name."様"; ?></h3></br>
    <p style="margin-left:40px;font-size:20px;">来所時間</p></br>
    <form action="" method="post">
        <input type="text" style="width:44px;height:55px;margin-left:60px;">:
        <input type="text" style="width:44px;height:55px;">
        <input type="submit" name="submit" value="入力">
        <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;">
    </form>
    <?php  
        }
    } else {echo null;} ?> 

<?php if(isset($visitime1)) { ?> <div style="display:inline-block;border:ridge;width:367px;height:479px;position:relative;">
   <?php
       $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
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
    <form action="" method="post">
    <input type="submit" name="back" value="一覧へ戻る">
    <h3 style="padding-left:20px;font-size:30px;"><?php echo $name."様"; ?></h3></br>
    <a style="margin-left:40px;font-size:20px;padding-bottom:10px;">来所時間</a></br>
    <input type="text" value="<?php echo substr($visit, 0, 2); ?>" style="width:44px;height:55px;margin-left:47px;color:black;font-weight:bold;">:
    <input type="text" value="<?php echo substr($visit, 3, 5); ?>" style="width:44px;height:55px;">
    <input type="submit" name="edit" value="更新" style="margin-left:244px;margin-bottom:40px;"></br>
    <a href="" name="delete" value="削除" style="text-align:center;margin-top:150px;margin-left:180px;">データを削除する</a>
    </form>
    </div><?php  } else {echo null;} ?> 


<?php /*退所*/ ?>

<?php if(!empty($exitime)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;">
    <?php
        $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
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
    <p style="padding-left:40px;font-size:20px;">退所時間</p></br>
    <form action="" method="post">
        <input type="text" style="width:44px;height:55px;margin-left:40px;">:
        <input type="text" style="width:44px;height:55px;">
        <input type="submit" name="submit" value="入力">
        <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;">
    </form>
    <?php  } else {echo null;} ?> 

<?php if(isset($exitime1)) { ?> <div style="display:inline-block;border:ridge;width:367px;height:579px;position:relative;">
   <?php
       $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
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
    <p style="margin-left:40px;font-size:20px;">退所時間</p></br>
    <input type="text" placeholder="<?php echo substr($visit, 0, 2); ?>" style="width:44px;height:55px;margin-left:60px;color:black;font-weight:bold;">:
    <input type="text" placeholder="<?php echo substr($visit, 3, 5); ?>" style="width:44px;height:55px;">
    <form action="" method="post">
    <input type="submit" name="edit" value="編集"></br>
    <a href="" name="delete" value="削除" style="margin-left:40px;">削除はこちらをクリック</a>
    <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;"></form>
    </div><?php  } else {echo null;} ?> 

<?php /*血圧*/ ?>

<?php if(!empty($bloodp)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;">
    <?php
        $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
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
    <p style="padding-left:40px;font-size:20px;">血圧</p></br>
    <form action="" method="post">
        最高血圧<input type="text" name="maxblood" style="width:44px;height:55px;margin-left:40px;">（mmhg）</br>
        最小血圧<input type="text" name="miniblood" style="width:44px;height:55px;margin-left:40px;">（mmhg）</br>
        脈拍<input type="text" name="pulse" style="width:44px;height:55px;margin-left:40px;">　(拍/分)
        <?php if(isset($_POST['maxblood'])) {
                $sql = 'UPDATE user SET maxblood = :blood WHERE id = :id';
                $stmt = getDB()->prepare($sql);
                $stmt->bindParam(':blood', $_POST['maxblood'], PDO::PARAM_STR);
                $stmt->bindParam(':id', $id, PDO::PARAM_STR);
                $stmt->execute();
                header('Location: https://animech2.herokuapp.com/');
                exit;
        }
        ?>
        <?php if(isset($_POST['miniblood'])) {
                $sql = 'UPDATE user SET miniblood = :blood WHERE id = :id';
                $stmt = getDB()->prepare($sql);
                $stmt->bindParam(':blood', $_POST['miniblood'], PDO::PARAM_STR);
                $stmt->bindParam(':id', $id, PDO::PARAM_STR);
                $stmt->execute();
                header('Location: https://animech2.herokuapp.com/');
                exit;
        }
        ?>
        <?php if(isset($_POST['pulse'])) {
                $sql = 'UPDATE user SET pulse = :blood WHERE id = :id';
                $stmt = getDB()->prepare($sql);
                $stmt->bindParam(':pulse', $_POST['pulse'], PDO::PARAM_STR);
                $stmt->bindParam(':id', $id, PDO::PARAM_STR);
                $stmt->execute();
                header('Location: https://animech2.herokuapp.com/');
                exit;
        }
        ?>
        <input type="submit" name="submit" value="入力">
        <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;">
    </form>
    <?php  } else {echo null;} ?> 

<?php if(isset($bloodp1)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;position:relative;">
   <?php
       $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
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
    <p style="padding-left:40px;font-size:20px;">退所時間</p></br>
    <input type="text" placeholder="<?php echo substr($visit, 0, 2); ?>" style="width:44px;height:55px;margin-left:40px;color:black;font-weight:bold;">:
    <input type="text" placeholder="<?php echo substr($visit, 3, 5); ?>" style="width:44px;height:55px;">
    <form action="" method="post">
    <input type="submit" name="edit" value="編集"></br>
    <a href="" name="delete" value="削除" style="margin-left:40px;">削除はこちらをクリック</a>
    <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;"></form>
    </div><?php  } else {echo null;} ?> 

<?php /*特記事項*/ ?>

<?php if(!empty($noticesing)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;">
    <?php
        $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        
    ?>
    <h3 style="padding-left:20px;font-size:30px;"><?php echo $name."様"; ?></h3></br>
    <p style="padding-left:40px;font-size:20px;">特記事項</p></br>
    <form action="" method="post">
        <textarea></textarea>
        <input type="submit" name="submit" value="入力">
        <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;">
    </form>
    <?php  
        }
    } else {echo null;} ?> 

<?php if(isset($noticesing1)) { ?> <div style="display:inline-block;border:ridge;width:567px;height:779px;position:relative;">
   <?php
       $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        $visit = $user['visit'];
        $notices = $user['notices'];
        }
    ?>
    <h3 style="padding-left:20px;font-size:30px;"><?php echo $name."様"; ?></h3></br>
    <p style="padding-left:40px;font-size:20px;">特記事項</p></br>
    <input type="text" value="<?php echo $notices; ?>" style="margin-left:40px;color:black;font-weight:bold;">
    <form action="" method="post">
    <input type="submit" name="edit" value="編集"></br>
    <a href="" name="delete" value="削除" style="margin-left:40px;">削除はこちらをクリック</a>
    <input type="submit" name="back" value="一覧へ戻る" style="position:absolute;bottom:9px;"></form>
    </div><?php  } else {echo null;} ?> 


