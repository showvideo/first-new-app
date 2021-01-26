
<table border="1" cellspacing="0" style="border-collaspe:collapse;">
    
    <tr style="background-color:#384D98;">
        <th style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">お名前</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">来所</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">退所</th>
        <th style="width:160px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">最高・最低血圧/脈拍</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">入浴</th>
        <th style="width:60px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">食事</th>
        <th style="width:170px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">特記事項</th>
    </tr>
    
<?php
    
    try {
        
        $db = getDB();
        $stt = $db->prepare('SELECT * FROM user WHERE 1');
        $stt->execute();
            while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                
                $id=$row['id'];
                $name=$row['name']; 
                $visit=$row['visit']; 
                $exits=$row['exits']; 
                $maxblood=$row['maxblood'];
                $bath=$row['bath']; 
                $meal=$row['meal']; 
                $notices=$row['notices'];
                
 ?>
           
<tr>
    <!--お名前-->
    <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(isset($name)){ ?>
            <form action="information/index.php/<?php echo $id ?>/" method="post" style="margin:0;">
            <a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $name; ?></a>
            </form>    
        <?php } ?>
     </td>
           
     <!--来所-->
     <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($visit)){ ?>                       
          <a href="../../input/index.php/<?php echo $id; ?>/?visitime=1" style="opacity:0;">TIME</a>                       
          <?php }else { ?>
          <a href="../../input/index.php/<?php echo $id; ?>/?visitime1=1" ><?php echo $visit; ?></a>     
        <?php } ?>
     </td>
        
     <!--退所-->
     <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($exits)){ ?>                       
          <a href="../../input/index.php/<?php echo $id; ?>/?exitime=1" style="opacity:0;">TIME</a>                       
          <?php }else { ?>
          <a href="../../input/index.php/<?php echo $id; ?>/?exitime1=1" ><?php echo $exits; ?></a>     
          <?php } ?>
     </td>
        
     <!--最高・最低血圧/脈拍-->
     <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($maxblood)){ ?>                       
          <a href="../../input/index.php/<?php echo $id; ?>/?bloodp=1" style="opacity:0;">TIME</a>                       
          <?php }else { ?>
          <a href="../../input/index.php/<?php echo $id; ?>/?bloodp1=1" ><?php echo $maxblood ?></a>     
        <?php } ?>
      </td>
        
      <!--入浴-->
      <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php echo $bath ?>     
       </td>
        
        
      <!--食事-->
      <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php echo $meal ?>     
      </td>
        
      <!--特記事項-->
      <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($notices)){ ?>                       
          <a href="../../input/index.php/<?php echo $id; ?>/?noticesing=1" style="opacity:0;">TIME</a>                       
        <?php }else { ?>
           <a href="../../input/index.php/<?php echo $id; ?>/?noticesing1=1" ><?php echo $notices ?></a>     
        <?php } ?>
      </td>
        
    </tr>

<?php 
                
      }
        
    } catch(PDOException $e) {
        
        echo "エラーメッセージ: {$e->getMessage()}";
     
    }

?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">お名前</th>
      <th scope="col">入所</th>
      <th scope="col">退所</th>
      <th scope="col">血圧</th>
      <th scope="col">食事</th>
      <th scope="col">入浴</th>
      <th scope="col">特記事項</th>
    </tr>
  </thead>
  <tbody>
<?php
    
    try {
        
        $db = getDB();
        $stt = $db->prepare('SELECT * FROM user WHERE 1');
        $stt->execute();
            while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                
                $id=$row['id'];
                $name=$row['name']; 
                $visit=$row['visit']; 
                $exits=$row['exits']; 
                $maxblood=$row['maxblood'];
                $bath=$row['bath']; 
                $meal=$row['meal']; 
                $notices=$row['notices'];
                
 ?>

    <tr>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $name ?></a></td>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $visit ?></a></td>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $exits ?></a></td>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $blood ?></a></td>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $bath ?></a></td>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $meal ?></a></td>
        <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"><?php echo $notices ?></a></td>
    </tr>
  </tbody>
</table>
    
</table>
<?php 
                
      }
        
    } catch(PDOException $e) {
        
        echo "エラーメッセージ: {$e->getMessage()}";
     
    }

?>
