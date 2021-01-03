
<?php if(!empty($visitime)) { ?> 
    <?php
        $sql = "SELECT id, name, visit, maxblood, meal, bath, notices FROM user WHERE id=:id";
        $stmt = getDB()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $user){
        $id = $user['id'];
        $name = $user['name'];
        }
    ?>
        <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>来所時間</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">来時間を選択してください。</a></br>
            
            <select name="visit_time" style="width:100px;height:30px;margin-left:40px;">
                <option value="">選択しない</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
            </select><input type="submit" value="入力" name="visit_submit" style="margin-left:80px;"></p>
        
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:190px;">
        </form>
    </div>
    <?php  } else {echo null;} ?> <?php if(isset($visitime1)) { ?> 
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
        
    ?>
        <div style="border:ridge;width:300px;height:400px;vertical-align:top;margin-left:6px;">

        <form action="" method="post">
            <p>来所時間</p>
            <a style="padding-left:200px;padding-bottom:50px;"><?php echo $name."様"; ?></a></br>
            <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">只今設定されている時間</a></br>
            <a style="padding-left:40px;font-size:17px;"><?php echo $visit; ?></a></br>
        <a style="padding-left:30px;font-size:13px;margin-top:50px;padding-top:50px;">来所時間を選択してください。</a></br>

            <select name="visit_time" style="width:100px;height:30px;margin-left:40px;">
                <option value="">選択しない</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
            </select></p>
        <input type="submit" value="一覧へ戻る" style="margin-left:110px;margin-top:160px;">

    </div>
        
    </form>

    </div>
</div>
<?php  }
    } else {echo null;} ?> 

