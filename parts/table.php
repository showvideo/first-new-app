
<table border="1" cellspacing="0" style="border-collaspe:collapse;">
    
    <tr style="background-color:#384D98;">
        <th style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">お名前</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">来所</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">退所</th>
        <th style="width:130px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">最高・最低血圧/脈拍</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">入浴</th>
        <th style="width:60px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">食事</th>
        <th style="width:170px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">特記事項</th>
    </tr>
    
        <?php
            $sql = "SELECT id, name, visit, exits, maxblood, miniblood, meal, bath, notices FROM user WHERE 1";
            $stmt = getDB()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $user){
            $id=$user['id'];
            $name=$user['name']; 
            $visit=$user['visit']; 
            $exits=$user['exits']; 
            $maxblood=$user['maxblood'];
            $bath=$user['bath']; 
            $meal=$user['meal']; 
            $notices=$user['notices'];
        ?>
           
    <tr>
        <!--お名前-->
        <td style="width:100px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(isset($name)){ ?>
            <form action="information/index.php/<?php echo $id ?>/" method="post">
            <a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $name; ?></a>
            </form>    
        <?php } ?>
        </td>
           
        <!--来所-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($visit)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id ?>/?visitime=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id ?>/?visitime1=1" ><?php echo $visit ?></a>     
        <?php } ?>
        </td>
        
        <!--退所-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($exits)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id ?>/?exitime=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id ?>/?exitime1=1" ><?php echo $exits ?></a>     
        <?php } ?>
        </td>
        
        <!--最高・最低血圧/脈拍-->
        <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
        <?php if(empty($maxblood)){ ?>                       
          
            <a href="../../input/index.php/<?php echo $id ?>/?bloodp=1" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
        
            <a href="../../input/index.php/<?php echo $id ?>/?bloodp1=1" ><?php echo $maxblood ?></a>     
        <?php } ?>
        </td>
        
    </tr>
        <?php
            }
        ?>
</table>
