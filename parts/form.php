<?php


    if (!empty($_POST["submit"])){

    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $aninon = htmlspecialchars($_POST['aninon']);

    $dbh = getDB();
    $sql = "INSERT INTO anime_thread (name, comment, aninon) VALUES (:name, :comment, :aninon)"; // INSERT文を変数に格納。:nameや:categoryはプレースホルダという、値を入れるための単なる空箱
    $stmt = $dbh->prepare($sql);
    $params = array(':name' => $name, ':comment' => $comment, ':aninon' => $aninon);
    $stmt->execute($params);

    }
?>

<form action="" method = "post">

    name:<input type="text" name = name></br>
    comment:<input type="text" name = comment>
    <input type="hidden" name="aninon" value="<?php echo $aninon; ?>">
    <input type="submit" name = "submit" value = "送信" >

</form>
