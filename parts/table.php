
<table border="1" cellspacing="0" style="border-collaspe:collapse;">
    
    <tr style="background-color:#384D98;">
        <th style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">お名前</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">来所</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">退所</th>
        <th style="width:130px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">バイタル</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">入浴</th>
        <th style="width:60px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">食事</th>
        <th style="width:170px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">特記事項</th>
    </tr>
    
        <?php
            $sql = "SELECT id, name, visit, exits, vital, meal, bath, notices FROM user WHERE 1";
            $stmt = getDB()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $user){
            $id=$user['id'];
            $name=$user['name']; 
            $visit=$user['visit']; 
            $exits=$user['exits']; 
            $vital=$user['vital'];
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
            <form name="visitTime" action="../../input/index.php/<?php echo $id ?>/" method="post">
            <input type="hidden" name="visitime" value="来所">
            </form>
            <a href="../../input/index.php/<?php echo $id ?>/" onclick="document.visitTime.submit();return false;" style="opacity:0;">TIME</a>                       
            <?php }else { ?>
            <form name="visitTime1" action="../../input/index.php/<?php echo $id ?>/" method="post">
            <input type="hidden" name="visitime1" value="来所">
            </form>
            <a href="../../input/index.php/<?php echo $id ?>/" onclick="document.visitTime1.submit();return false;"><?php echo $visit ?></a>     
        <?php } ?>
        </td>
        
    </tr>
        <?php
            }
        ?>
</table>
