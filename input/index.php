<?php require_once('../func/function.php'); ?>
<?php var_dump(getInfomation()); ?>
<?php $id = getInfomation(); ?>
<?php echo $id; ?>

入浴<?php if(empty($user['bath'])) {?><input type="text"> <?php } ?> 
