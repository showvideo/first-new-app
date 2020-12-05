<?php
    require('head.php');
?>
<?php
   require('../func/function.php') 
?>     
<?php
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
        try{
        $db = getDB();
        $sql = 'SELECT * FROM users WHERE email=:email and pass=:pass';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
            
        if (count($result)>0) {
        header('Location:'../index.html');
        $db = null;
        $stmt = null;
        exit;
        } else {
            $err_msg = "ユーザー名またはパスワードが誤りです。";
        } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
        }
}

?>
<div style = "display:inline-block;border:ridge;margin-left:407px;width:450px;height:1000px;">
    <form action="" method="post">
        <?php if ($err_msg != null && $err_msg !=='') { echo $err_msg; } ?>        
        ログイン</br>
        メールアドレス:<input type="text" name="e-mail"></br>
        パスワード:<input type="pass" name="pass">
        <input type="submit" name="login" value="ログイン">
    </form>
</div>

<div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:194px;">
    最新ｱﾆﾒのTL</br>
    <div>

    </div>

</div>
