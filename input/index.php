<?php require_once('../func/function.php'); ?>

<?php $id = getInfomation(); ?>
<?php echo $id; ?>
来所<?php if(empty($user['visit'])) {?><input type="text" name="visit"> <?php } ?> 
退所<?php if(empty($user['exit'])) {?><input type="text" name="exit"> <?php } ?> 
バイタル<?php if(empty($user['vital'])) {?><input type="text" name="vital"> <?php } ?> 
入浴<?php if(empty($user['bath'])) {?><input type="text" name="bath"> <?php } ?> 
食事<?php if(empty($user['meal'])) {?><input type="text" name="meal"> <?php } ?> 
特記事項<?php if(empty($user['notices'])) {?><input type="text" name="notices"> <?php } ?> 
