<?php
  $sql = 'SELECT name, message FROM user WHERE 1';
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();

$titles = array_slice($result,0,100);
foreach($titles as $title) {
  var_dump($title);
  echo $title['name'];
}
?>

