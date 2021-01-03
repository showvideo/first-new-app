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

