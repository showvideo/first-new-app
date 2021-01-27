
<div style="width:250px;display:inline-block;vertical-align:center;border:solid 1px;margin-top:50px;position:relative;">
<<スタッフ・メモ>></br>

<a style="padding-bottom:200px;"><?php if(!isset($_POST['note'])){
        echo "入力がありません";
} ?></a>

<a style="padding-bottom:400px;"><?php if(isset($_POST['note'])){
        echo "・".$_POST['note']; 
} ?></a>

<div class="form-group" style="padding-top:200px;padding-bottom:15px;">
<form action="" method="post">
<small id="emailHelp" class="form-text text-muted">memo</small></br>
<input type="text" class="name" id="exampleInputEmail1" aria-describedby="emailHelp">
<button type="submit" class="btn btn-primary">送信</button>        
</form>
</div>
</div>

