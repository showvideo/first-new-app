<?php require_once('../func/function.php'); ?>
<?php $id = getInformation(); ?>

<div style="border:ridge;width:500px;height:700px;">     
<?php
     $id = $user['id'];   
     $sql = "SELECT id, name, old, pref, date FROM user WHERE id=:id";
     $stmt = getDB()->prepare($sql);
     $stmt->bindParam(':id', $id, PDO::PARAM_STR);
     $stmt->execute();
     $result = $stmt->fetchAll();
     foreach($result as $user) {
          $name = $user['name'];
     }
?>     
<?php
     echo $id;
?>
</div>  
