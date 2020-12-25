
<div style="display:inline-block;border:ridge;width:400px;vertical-align:top;margin-left:6px;padding-left:20px;">

    <form action="../search/index.php" method="post">
        
    <h4>名前</h4>
        <input type="text" name="search_name" style="width:100px;height:34px;margin-left:20px;">様。
    
    <h4>来所時間</h4>        
        <select name="search_visit" style="margin-left:20px;">
        <option value="選択なし">選択なし</option>
        <option value="09:30">09時30分</option>
        <option value="10:00">10時00分</option>
        <option value="10:30">10時30分</option>
        <option value="11:00">11時00分</option>
        </select>
        
    <h4>退所</h4>
        <select name="search_exit" style="margin-left:20px;">
        <option value="選択なし">選択なし</option>
        <option value="13:00">13時00分</option>
        <option value="13:30">13時30分</option>
        <option value="14:00">14時00分</option>
        <option value="14:30">14時30分</option>
        </select>
        
      <h4>バイタル</h4>
        <a style="margin-left:10px;">最高血圧</a><input type="text" name="vital1" style="width:40px;height:50px;margin-left:20px;">～<input type="text" name="vital1" style="width:40px;height:50px;">(mmhg)</br>
      
        <a style="margin-left:10px;">最低血圧</a><input type="text" name="vital2" style="width:40px;height:50px;margin-left:20px;">～<input type="text" name="vital2" style="width:40px;height:50px;">(mmhg)</br>
        
        <a style="margin-left:10px;">脈拍</a><input type="text" name="vital3" style="width:40px;height:50px;margin-left:50px;">～<input type="text" name="vital3" style="width:40px;height:50px;">(拍/分)
        
      <h4>入浴ありで絞り込む</h4>
        <input type="radio" name="bath1" value="yes" style="margin-left:20px;"> はい
        <input type="radio" value="no" checked> いいえ
        
      <h4>食事ありで絞り込む</h4>
        <input type="radio" name="meal1" value="はい" style="margin-left:20px;"> はい
        <input type="radio" value="いいえ" checked> いいえ
      
      <h4>特記事項ありで絞り込む</h4>
          <input type="radio" name="notices1" value="はい" style="margin-left:20px;"> はい
          <input type="radio" value="いいえ" checked> いいえ    
          <input type="submit" value="絞り込む">
   
   </form>
</div>

