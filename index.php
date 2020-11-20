<?php
    include('parts/head.php')
?>

<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/anime/func/function.php')
?>



<div style = "display:inline-block;border:ridge;margin-left:405px;width:450px;height:1000px;">
    あなたが見たｱﾆﾒを共有しよう</br>
    ｱﾆﾒで繋がる掲示板</br>
    ゲーム情報をみんなで交換しよう！
    友だち募集やゲーム攻略などゲーム情報が満載！</br>

    ｱﾆﾒ一覧</br>
    <div style = "margin-left:10px;">
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/anime/parts/title.php')
        ?>
    </div>

</div>
<?php
echo "ﾃﾞｲ氏ね";
?>
<div style = "display:inline-block;vertical-align:top;border:ridge;height:700px;width:200px;">
    最新ｱﾆﾒのTL</br>
    <div>
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . '/anime/parts/tl.php')
        ?>
    </div>

</div>
