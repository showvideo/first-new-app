<?php
  $sql = 'SELECT name,old,prefecure,message,anime_title FROM user WHERE 1';
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
    <a>'."".$title["prefecure"].'</a>
  ');
  p(' 
    <p>'."".$title["message"].'</P>
  ');
  p(' 
    <a style = "border-top:ridge;padding-left:200px;font-size:15px;">'."".$title["anime_title"].'</a>
  ');
  
}
?>
