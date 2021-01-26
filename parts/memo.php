
<div style="width:250px;display:inline-block;vertical-align:center;border:solid 1px;margin-top:50px;">
<<スタッフ・メモ>></br>

<a style="padding-bottom:200px;"><?php if(!isset($_POST['note'])){
        echo "入力がありません";
} ?></a>

<a style="padding-bottom:200px;"><?php if(isset($_POST['note'])){
        echo "・".$_POST['note'].?><small><?php echo $_POST['name']; 
} ?></a>

<div style="padding-top:200px;padding-bottom:50px;">
<form action="" method="post">
ﾒﾓ:<input name="note" type='text'>
name:<input name="name" type='text'>
<input type='submit' value='入力'>
</form>
</div>
</div>

