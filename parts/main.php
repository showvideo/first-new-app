<?php
  $sql = 'SELECT name,old,prefucure,message,anime_title FROM user WHERE 1';
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();

$titles = array_slice($result,0,100);
foreach($titles as $title) {
  
  p(' 
    <a>'."".$title["name"].'</a>
  ');
  p(' 
    <a>'."".$title["old"].'</a>
  ');
  p(' 
    <a>'."".$title["prefucure"].'</a>
  ');
  p(' 
    <p>'."".$title["message"].'</P>
  ');
  p(' 
    <p>'."".$title["anime_title"].'</P>
  ');
  
}
?>
