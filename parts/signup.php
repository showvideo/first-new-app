<?php
if(isset($_POST['signin'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    try {
        $db = getDB();
        $sql = 'INSERT INTO users(username, password) values(:name, :pass)
        $stmt = $db->prepare($sql);
        
        $stmt->execute()
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
}

?>
<?php
    require('head.php');
?>

<?php
    require('../func/function.php')
?>

<div style = "display:inline-block;border:ridge;margin-left:407px;width:450px;height:1000px;">
    <form action="" method="post">
        新規登録</br>
        メールアドレス:<input type="text" name="e-mail"></br>
        パスワード:<input type="pass" name="pass">
        <input type="submit" name="signin" value="新規登録">
    </form>
</div>

<div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:194px;">
    最新ｱﾆﾒのTL</br>
    <div>
        <?php
        require('tl.php')
        ?>
    </div>

</div>
