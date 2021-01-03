
<?php /*特記事項*/ ?>

<?php if(!empty($noticesing)) { ?> 
        <?php
        $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        
    ?>
    <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>特記事項</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">特記事項を入力してください。</a></br>

            <textarea name="" style="width:200px;height:100px;margin-left:40px;resize:none;"></textarea>
                
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:190px;">
        </form>
    </div>

    <?php  
        }
    } else {echo null;} ?> 

<?php if(isset($noticesing1)) { ?> 
   <?php
       $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        $visit = $user['visit'];
        $notices = $user['notices'];
        }
    ?>
    <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>特記事項</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">只今入力されている特記事項</a></br>
            <a style="padding-left:40px;font-size:17px;"><?php echo $visit; ?></a></br>
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">特記事項を追加する</a></br>

            <textarea name="visit_time" style="width:200px;height:100px;margin-left:40px;resize:none;"></textarea>
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:160px;">

    </div>
        
    </form>

    </div>
<?php  } else {echo null;} ?> 


