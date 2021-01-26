
<div style="width:250px;display:inline-block;vertical-align:center;border:solid 1px;margin-top:50px;">
スタッフメモ</br>

<a style="margin-bottom:200px;"><?php if(!isset($_POST['note'])){
        echo "入力がありません";
} ?></a>
<a style="margin-bottom:200px;"><?php if(isset($_POST['note'])){
        echo "・".$_POST['note']; 
} ?></a>
<form action="" method="post">
<input name="note" type='text'>
<input type='submit' value='入力'>
</form>  
</div>

