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
        <input type="submit" value="新規登録">
    </form>
</div>

<?php
    
    $sql = "INSERT INTO user(email,pass) VALLUES(:email, :pass)
    
    $stmt = prepare($sql);
    $stmt->bind-Param(:email, $email, PDO_PARAM_STR);
    $stmt->bind-Param(:pass, $pass, PDO_PARAM_STR);
    $stmt->execute();
    
?>
<div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:194px;">
    最新ｱﾆﾒのTL</br>
    <div>
        <?php
        require('tl.php')
        ?>
    </div>

</div>
