
  <?php
  $sql = 'SELECT name,old,prefecure,message,anime_title FROM user WHERE 1';
  $stmt = getDB()->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();

$titles = array_slice($result,0,100);
foreach($titles as $title) {
  
  p(' 
    <div style="width:450px;border:ridge;"
    <a>'."".$title["name"].'</a>
    <a>'."".$title["old"].'</a>
    <a>'."".$title["pref"].'</a>
    <p>'."".$title["message"].'</P>
    <a style = "border-top:ridge;padding-left:250px;font-size:15px;">'."".$title["anime_title"].'</a>
    </div></br>
  ');
  
}
?>
