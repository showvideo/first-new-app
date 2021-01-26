
<table border="1" cellspacing="0" style="border-collaspe:collapse;display:inline-block;">
    <thead>
    <tr style="background-color:#384D98;">
        <th style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">お名前</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">来所</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">退所</th>
        <th style="width:160px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">最高・最低血圧/脈拍</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">入浴</th>
        <th style="width:60px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">食事</th>
        <th style="width:170px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">特記事項</th>
    </tr>
    </thead>
<?php
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
<tbody>
<tr>
    <!--お名前-->
    <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $name ?></a>
     </td>
           
     <!--来所-->
    <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $visit ?></a>
     </td>
        
     <!--退所-->
    <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $exits ?></a>
     </td>
        
     <!--最高・最低血圧/脈拍-->
     <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $blood ?></a>
     </td>
        
      <!--入浴-->
     <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $bath ?></a>
     </td>
        
        
      <!--食事-->
    <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $meal ?></a>
     </td>
        
      <!--特記事項-->
    <td onclick="window.location='https://animech2.herokuapp.com/input/index.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $notices ?></a>
     </td>
        
    </tr>
<tbody>


<?php 
                
      }
        
?>
</table>
