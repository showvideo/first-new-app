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

<?php require_once('../input/visit.php'); ?>
<?php require_once('../input/exit.php'); ?>
<?php require_once('../input/blood.php'); ?>
<?php require_once('../input/notices.php'); ?>

<?php /*血圧*/ ?>

<?php if(!empty($bloodp)) { ?>
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
    <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>最高・最低血圧</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">最高・最低血圧を入力してください。</a></br>
            <input type="text" name="maxb" style="width:50px;margin-left:40px;">/<input type="text" name="maxm" style="width:50px;"> </br>
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">脈拍を入力してください。</a></br>
            <input type="text" name="pulse" style="width:50px;margin-left:40px;">
            <input type="submit" value="入力" style="margin-left:100px;"></br>
    
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:190px;">
        </form>
    </div>

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
    ?><?php  } else {echo null;} ?> 

<?php /*特記事項*/ ?>

<?php if(!empty($noticesing)) { ?> 
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
    <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>特記事項</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">特記事項を入力してください。</a></br>

            <textarea name="" style="width:200px;height:100px;margin-left:40px;resize:none;"></textarea>
                
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:190px;">
        </form>
    </div>

    <?php  
        }
    } else {echo null;} ?> 

<?php if(isset($noticesing1)) { ?> 
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
    <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>特記事項</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">只今入力されている特記事項</a></br>
            <a style="padding-left:40px;font-size:17px;"><?php echo $visit; ?></a></br>
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">特記事項を追加する</a></br>

            <textarea name="visit_time" style="width:200px;height:100px;margin-left:40px;resize:none;"></textarea>
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:160px;">

    </div>
        
    </form>

    </div>
<?php  } else {echo null;} ?> 


