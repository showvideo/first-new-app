<?php
  $sql = 'SELECT name, message FROM user WHERE 1';
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  echo $reslut;
  var_dump($result);
$title = array_slice($result,0,100);
?>
