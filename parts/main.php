<?php
  $sql = 'SELECT name, message FROM user WHERE 1';
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  echo $reslut;
?>
<?php
  $array = array_slice($result, 0 ,100);
  foreach($array as $title) {
  echo('
    $title['name'].$title['message'];
  ')
  }
?>
