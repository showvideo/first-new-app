<?php
  $sql = "SELECT title FROM anime_title WHERE 1";
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  
  $result = $stmt->fetchAll();
  
  $anime_titles = array_slice($result,0,100);
  foreach($anime_titles as $anime_title) {
    echo $anime_title['title']</br>;
  }
  
  echo "継続は力なり、こつこつと
  継続すれば、きっと報われるr。。";

?>
