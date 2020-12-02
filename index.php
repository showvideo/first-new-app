<?php
    require('parts/head.php');
?>

<?php
    require('func/function.php')
?>

<div style = "display:inline-block;border:ridge;margin-left:407px;width:450px;height:1000px;">
    あなたが見たｱﾆﾒを共有しよう</br>
    ｱﾆﾒで繋がる掲示板</br>
    ゲーム情報をみんなで交換しよう！
    友だち募集やゲーム攻略などゲーム情報が満載！</br>
    <?php
    echo 'ﾃﾞｲ氏ね';
    ?>
    ｱﾆﾒ一覧</br>
    <div style = "margin-left:10px;width:393px;padding-left:20px;">
        人気ﾀｲﾄﾙ
        <?php
        require('parts/title.php')
        ?>
    </div>

</div>

<div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:194px;">
    最新ｱﾆﾒのTL</br>
    <div>
        <?php
        require('parts/tl.php')
        ?>
    </div>

</div>
