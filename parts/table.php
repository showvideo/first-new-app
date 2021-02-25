<?php require_once("th.php"); ?>  
<?php
        $db = getDB();
        $stt = $db->prepare('SELECT * FROM user WHERE 1');
        $stt->execute();
            while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
 ?>
<tr>
    <td style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $row['name']; ?></a>
     </td>

     <!--来所-->
    <td onclick="window.location='input/visit.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $visit; ?></a>
     </td>
        
     <!--退所-->
    <td onclick="window.location='input/exit.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $exits; ?></a>
     </td>
        
     <!--最高・最低血圧/脈拍-->
     <td onclick="window.location='input/blood.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
     <?php if(isset($maxblood) || ($miniblood) ||($pulse)){
         echo $maxblood."/".$miniblood."/".$pulse;
     }
      ?></a>
     </td>
        
      <!--入浴-->
     <td  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $bath; ?></a>
     </td>
        
        
      <!--食事-->
    <td   
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $meal; ?></a>
     </td>
        
      <!--特記事項-->
    <td onclick="window.location='input/notices.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo mb_strimwidth($notices, 0, 7, '…', 'UTF-8'); ?></a>
     </td>
        
    </tr>

<?php 
                
      }
        
?>
</table>
