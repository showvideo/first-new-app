
<div style="display:inline-block;border:ridge;width:400px;vertical-align:top;margin-left:6px;">

    <form action="../search/index.php" method="post">
        
    <h4>名前</h4><input type="text" name="name1">
    
    <h4>来所</h4>
        <select name="visit100">
        <option value="">選択しない</option>    
        <option value="09:00">09:00</option>
        <option value="09:30">09:30</option>
        <option value="10:00">10:00</option>
        <option value="10:30">10:30</option>
        <option value="11:00">11:00</option>
        <option value="11:30">11:30</option>
        <option value="12:00">12:00</option>
        </select>
    
      <h4>退所</h4>
        <select name="exit1">
        <option value="">選択しない</option>    
        <option value="13:30">13:30</option>
        <option value="14:00">14:00</option>
        <option value="14:30">14:30</option>
        <option value="15:00">15:00</option>
        <option value="15:30">15:30</option>
        <option value="16:00">16:00</option>
        <option value="16:30">16:30</option>
        </select>
        
      <h4>バイタル</h4>
      血圧<input type="text" name="vital1" style="width:30px;">～<input type="text" name="vital1" style="width:30px;"></br>
      
      脈拍<input type="text" name="vital2" style="width:30px;">～<input type="text" name="vital2" style="width:30px;">
        
      <h4>入浴ありで絞り込む</h4><input type="radio" name="bath1" value="はい"> はい
      <input type="radio" value="いいえ" checked> いいえ
      <h4>食事ありで絞り込む</h4><input type="radio" name="meal1" value="はい"> はい
      <input type="radio" value="いいえ" checked> いいえ
      <h4>特記事項ありで絞り込む</h4>
      <input type="radio" name="notices1" value="はい"> はい
      <input type="radio" value="いいえ" checked> いいえ    
      <input type="submit" value="絞り込む">
   
   </form>
</div>

