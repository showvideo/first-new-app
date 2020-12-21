
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
            $id = $user['id'];
            $name = $user['name'];
            $visit = $user['visit'];
            $exits = $user['exits'];
            $vital = $user['vital'];
            $bath = $user['bath'];
            $meal = $user['meal'];
            $notices = $user['notices'];
        ?>
            <tr>
                <!--お名前-->
                <td style="width:100px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(isset($name)){ ?>
                        <a href="information/index.php/<?php echo $id ?>/" style="text-decoration:none;color:black;"><?php echo $name; ?></a>
                    <?php } ?>
                </td>
                
                <!--来所-->
                <td style="width:60px;height:34px;border:1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(empty($visit)){ ?>                       
                        <form name='visitForm' action="input/index.php/" method="post">                           
                            <a href="input/index.php/<?php echo $id ?>/" onClick='document.visitForm' style="opacity:0;">VISIT</a>
                            <input type="hidden" name='visitname' value="1">
                        </form>
                    <?php }else { ?>
                        <a href="input/index.php/<?php echo $id ?>/?posts=1" style="text-decoration:none;color:black;"><?php echo $visit; ?></a>
                    <?php } ?>
                </td>
                
                <!--退所-->
                <td style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(empty($exits)){ ?>                       
                        <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                            <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;padding:0;"></a>
                            <input type="hidden" name="posts" value="100">
                        </form>
                    <?php }else { ?>
                        <a href="input/index.php/<?php echo $id ?>/?post10=100" style="text-decoration:none;color:black;"><?php echo $exits ?></a>
                    <?php } ?>
                </td>
                
                <!--バイタル-->
                <td style="width:130px;height:35px; border: 1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(empty($vital)){ ?>                       
                        <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                            <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;padding:0;"></a>
                            <input type="hidden" name="post2" value="100">
                        </form>
                    <?php }else { ?>
                        <a href="input/index.php/<?php echo $id ?>/?post20=100" style="text-decoration:none;color:black;"><?php echo $vital; ?></a>
                    <?php } ?>
                </td>
                
                <!--入浴-->  
                <td style="width:60px;height:35px;border:1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(empty($bath)){ ?>                       
                        <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                            <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;padding:0;"></a>
                            <input type="hidden" name="posts" value="100">
                        </form>
                    <?php }else { ?>
                        <a href="input/index.php/<?php echo $id ?>/?posts=100" style="text-decoration:none;color:black;"><?php echo $bath; ?></a>
                    <?php } ?>
                </td>
                
                <!--食事-->
                <td style="width:60px;height:35px; border:1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(empty($meal)){ ?>                       
                        <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                            <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;padding:0;"></a>
                            <input type="hidden" name="posts" value="100">
                        </form>
                    <?php }else { ?>
                        <a href="input/index.php/<?php echo $id ?>/?posts=100" style="text-decoration:none;color:black;"><?php echo $meal; ?></a>
                    <?php } ?>
                </td>
                
                <!--特記事項-->
                <td style="width:170px;height:35px; border: 1px solid #ccc;background:#fff;padding:4px;">
                    <?php if(empty($notices)){ ?>                       
                        <form action="input/index.php/<?php echo $id ?>/" method="post">                           
                            <a href="input/index.php/<?php echo $id ?>/" style="opacity:0;"><input type="submit" value="submit" style="height:30px;margin:0;padding:0;"></a>
                            <input type="hidden" name="posts" value="100">
                        </form>
                    <?php }else { ?>
                        <a href="input/index.php/<?php echo $id ?>/?posts=100" style="text-decoration:none;color:black;"><?php echo $notices; ?></a>
                    <?php } ?>
                </td>
            </tr>
        <?php
            }
        ?>
</table>
