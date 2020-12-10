<?php require_once('../func/function.php'); ?>
<?php $id = getInfomation(); ?>

<div style="border:ridge;width:500px;height:700px;">     
<?php

     $sql = "SELECT id, name, old, pref, date FROM user WHERE id=:id";
     $stmt = getDB()->prepare($sql);
     $stmt->bindParam(':id', $id, PDO::PARAM_STR);
     $stmt->execute();
     $result = $stmt->fetchAll();
     foreach($result as $user) {
          ?><a style="font-size:20px;"><?php echo $user['name'] ?></a></br><?php ;
          ?><a><?php echo $user['old'] ?></a><?php ;
          ?><a><?php echo $user['plef'] ?></a><?php ;
          ?><a><?php echo $user['name'] ?></a><?php ;
     }
?>     
</div>  
