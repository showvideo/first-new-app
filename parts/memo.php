
<div style="width:250px;display:inline-block;vertical-align:center;border:solid 1px;margin-top:50px;">
<<スタッフ・メモ>></br>

<a style="padding-bottom:200px;"><?php if(!isset($_POST['note'])){
        echo "入力がありません";
} ?></a>

<a style="padding-bottom:200px;"><?php if(isset($_POST['note'])){
        echo "・".$_POST['note']; 
} ?></a>

<div style="padding-top:200px;padding-bottom:50px;">
<form action="" method="post">
<input name="note" type='text'>
<input type='submit' value='入力'>
</form>
</div>
</div>

