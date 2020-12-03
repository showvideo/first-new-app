<?php
  $sql = 'SELECT name, message FROM user WHERE 1';
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  echo $reslut;
  
$title = array_slice($result,0,100);

echo('
<p>."".$tItem["title"].'</p>
');
?>
