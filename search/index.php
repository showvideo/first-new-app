<head>
    <script type="text/javascript"></script>
</head>    
<?php require_once("../common/function.php"); ?>

<div style="display:inline-block;">
<table border="1" cellspacing="0" style="border-collaspe:collapse;">

    <tr>
        <th style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">御利用者</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">来所</th>
        <th style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">退所</th>
        <th style="width:90px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">バイタル</th>
        <th style="width:50px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">入浴</th>
        <th style="width:50px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">食事</th>
        <th style="width:170px;height:35px;border:1px solid #ccc; background:#fff;padding:4px;">特記事項</th>
    </tr>
    
        <?php
            $sql = "SELECT id, name, visit, vital, meal, bath, notices FROM user WHERE name LIKE '%".$_POST["user_name"]."%' ";
            $stmt = getDB()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $user){
            $id = $user['id'];
            $name = $user['name'];
        ?>
            <tr>
                <td style="width:100px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php if(!empty($user['name'])){  
                ?><a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $user['name']; ?></a><?php } else { echo null; } ?></td>
                
                <?php /*来所*/ ?>
                <td style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['visit'])){ ?>                       
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;"></a>
                    <input type="hidden" name="posts" value="100">
                    </form>
                    <?php }else { ?>
                    <a href="input/index.php/<?php echo $id ?>/?posts=100" style="text-decoration:none;color:black;"><?php echo $user['visit']; ?></a>
                    <?php } ?>
                </td>
                
                <?php /*退所*/ ?>
                <td style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php /*if(empty($user['exit'])){ ?>
                <form "method="post" action="input/index.php">
                <input type="hidden" name="post1" value="post1"></form>
                <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><?php echo "opacity";?></a><?php }else { echo $user['exit'];} */?></td>
    
                <?php /*バイタル*/ ?>
                <td style="width:90px;height:35px; border: 1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['vital'])){ ?>                                     
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:30px;margin:0;></a>
                    <input type="hidden" name="post1" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id ?>/?post1=100" style="text-decoration:none;color:black;"><?php echo $user['vital']; ?></a>
                    <?php } ?></td>

                <?php /*入浴*/ ?>  
                <td style="width:50px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['bath'])){ ?>                                          
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:30px;margin:0;></a>
                    <input type="hidden" name="post2" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id; ?>/" style="text-decoration:none;color:black;"><?php echo $user['bath']; ?></a> <?php } ?></td>

                <?php /*食事*/ ?>
                <td style="width:50px;height:35px; border:1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['meal'])){ ?>                                   
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:20px;margin:0;"></a>
                    <input type="hidden" name="post3" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id; ?>/" style="text-decoration:none;color:black;"><?php echo $user['meal']; ?></a> <?php } ?></td>

                <?php /*特記事項*/ ?>
                <td style="width:170px;height:35px; border: 1px solid #ccc;background:#fff;padding:4px;"><?php if(empty($user['notices'])){ ?>                                           
                    <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                    <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="佐藤" style="height:25px;margin:0;"></a>
                    <input type="hidden" name="post4" value="100">
                    </form>
                <?php }else { ?><a href="input/index.php/<?php echo $id; ?>/" style="text-decoration:none;color:black;"><?php echo $user['notices']; ?></a> <?php } ?></td>

            </tr>
        <?php
            }
        ?>
</table>
</div>
<?php require_once("../parts/search.php"); ?>
