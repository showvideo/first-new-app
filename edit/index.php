<?php if(isset($_POST['edit'])) { ?>
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
    来所時間</br>
    <form action="" method="post">
    <input type="text" name="visit" style="width:100px;height:40px;" placeholder="<?php echo $visit; ?>"></br>
<input type="submit" name="edit1" value="編集決定"></form>
    <?php } ?>
