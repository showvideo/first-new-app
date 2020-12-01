<?php
    require('head.php');
?>

<?php
    require('../func/function.php');
?>     

<?php
if(isset($_POST['signin'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
        try{
        $sql = 'INSERT INTO users(email, pass) VALUES(:email, :pass)';
        $stmt = getDB()->prepare($sql);
        $stmt->bind_param(:email, $email, PDO_PARAM_STR);
        $stmt->bind_Param(:pass, $pass, PDO_PARAM_STR);
        $stmt->execute();

        header('Location: ../parts/login.php');
        exit;
        } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
        }
}

?>



<div style = "display:inline-block;border:ridge;margin-left:407px;width:450px;height:1000px;">
    <form action="" method="post">
        新規登録</br>
        メールアドレス:<input type="text" name="email"></br>
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
