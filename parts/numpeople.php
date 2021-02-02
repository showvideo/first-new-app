
<div style="width:250px;display:inline-block;border:solid 1px;margin-top:40px;margin-left:10px;position:relative;">

<strong style="padding:20px 10px;margin:0;">利用者数</strong></br>

<?php

    $sql = "SELECT count(*) as cnt FROM user WHERE sex=1";
    $stmt = getDB()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    $sex = $row["cnt"];
?>
<?php

$sql = "SELECT count(*) as cnt FROM user WHERE sex=2";
$stmt = getDB()->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
$sex1 = $row["cnt"];
?>

<?php

    $sql = "SELECT count(bath) as cnt FROM user WHERE 1";
    $stmt = getDB()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    $bath = $row["cnt"];
?>

<?php

    $sql = "SELECT count(meal) as cnt FROM user WHERE 1";
    $stmt = getDB()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    $bath = $row["cnt"];
?>
<p style="margin-top:20px;margin-left:20px;">男性<?php echo $sex ?>人</p>
<p style="margin-left:20px;margin-top:0;">女性<?php echo $sex1 ?>人</p>
<strong style="margin-left:10px;">入浴</strong></br>
<p style="margin-top:10px;margin-left:20px;"><?php echo $bath ?>人</p>
<strong style="padding:10px 10px;margin:0;">食事</strong></br>
<p style="margin-top:10px;margin-left:20px;"><?php echo $bath ?>人</p>
</div>
