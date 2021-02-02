<tr>
    <!--お名前-->
    <td onclick="window.location='input/name.php/<?php echo $id ?>/'"  
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $name; ?></a>
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
     <?php if(isset($maxblood) || ($miniblood) ||( $pulse)){
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
     style="height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php echo $notices ?></a>
     </td>
        
</tr>
