
<div style="width:250px;display:inline-block;vertical-align:center;border:solid 1px;margin-top:50px;">
<<スタッフ・メモ>></br>

<a style="padding-bottom:200px;"><?php if(!isset($_POST['note'])){
        echo "入力がありません";
} ?></a>

<a style="padding-bottom:200px;"><?php if(isset($_POST['note'])){
        echo "・".$_POST['note']; 
} ?></a>

<div class="form-group" style="padding-top:200px;padding-bottom:50px;">
<form action="" method="post">
ﾒﾓ:<input type="text" class="name" id="exampleInputEmail1" aria-describedby="emailHelp">
<small id="emailHelp" class="form-text text-muted">memo</small>
<button type="submit" class="btn btn-primary">Submit</button>        
</form>
</div>
</div>

