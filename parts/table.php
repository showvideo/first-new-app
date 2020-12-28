
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
        $result = $stt->fetchAll();
            while($row = $stt->fetchAll()) {
                
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
        <td><?php echo $name ?></td>
        <td><?php echo $visit ?></td>
        <td><?php echo $exits ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $name ?></td>
    </tr>
<?php   
            }
        
    } catch(PDOException $e) {
        
        echo "エラーメッセージ: {$e->getMessage()}";
     
    }

?>
</table>
