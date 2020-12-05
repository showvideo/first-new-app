<?php

  $sql = "SELECT title FROM anime_title WHERE 1";
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  
  $result = $stmt->fetchAll();
  
  $anime_titles = array_slice($result,0,100);
  foreach($anime_titles as $anime_title) {
      p(' 
    <a href="" style="text-decoration:none;">＃'."".$anime_title['title'].'</a>
      ');
  }

?>
