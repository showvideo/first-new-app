
<div style="width:200px;display:inline-block;vertical-align:center;border:solid 1px;margin-top:50px;">
スタッフメモ</br>

<?php if(!isset($_POST['note'])){
        echo "入力がありません";
} ?>
        
<?php echo "・".$_POST['note']; ?>
<form action="" method="post">
<input name="note" type='text'>
<input type='submit' value='入力'>
</form>  
</div>

