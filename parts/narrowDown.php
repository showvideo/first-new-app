
<div style="display:inline-block;border:ridge;width:200px;vertical-align:top;margin-left:6px;">

    <form action="../search/index.php" method="post">
        
        <p style="text-align:center;border-bottom:ridge;width:80px;border-right:ridge;margin-top:0;">名前</p>
        <input type="text" name="search_name" style="width:100px;margin-top:15px;margin-left:80px;">様
    
    <p style="text-align:center;border-bottom:ridge;width:80px;border-right:ridge;margin-top:0;border-top:300px;border-top:ridge;margin-top:30px;">来所時間</p>        
        <select name="search_visit" style="margin-left:20px;">
        <option value="選択なし">選択なし</option>
        <option value="09:30">09時30分</option>
        <option value="10:00">10時00分</option>
        <option value="10:30">10時30分</option>
        <option value="11:00">11時00分</option>
        </select>
        
    <p style="text-align:center;border-bottom:ridge;width:80px;border-right:ridge;margin-top:0;border-top:300px;border-top:ridge;margin-top:30px;">退所</p>
        <select name="search_exit" style="margin-left:20px;">
        <option value="選択なし">選択なし</option>
        <option value="13:00">13時00分</option>
        <option value="13:30">13時30分</option>
        <option value="14:00">14時00分</option>
        <option value="14:30">14時30分</option>
        </select>
        
      <p style="text-align:center;border-bottom:ridge;width:80px;border-right:ridge;margin-top:0;border-top:300px;border-top:ridge;margin-top:30px;">バイタル</p>
        <a style="margin-left:10px;">最高血圧</a></br><input type="text" name="maxblo" style="width:40px;height:50px;margin-left:20px;">～<input type="text" name="maxblo1" style="width:40px;height:50px;">(mmhg)</br>
      
<a style="margin-left:10px;">最低血圧</a></br><input type="text" name="maxblo2" style="width:40px;height:50px;margin-left:20px;">～<input type="text" name="maxblo3" style="width:40px;height:50px;">(mmhg)</br>
        
<a style="margin-left:10px;">脈拍</a></br><input type="text" name="maxblo4" style="width:40px;height:50px;margin-left:50px;">～<input type="text" name="maxblo5" style="width:40px;height:50px;">(拍/分)
        
      <p style="text-align:center;border-bottom:ridge;width:80px;border-right:ridge;margin-top:0;border-top:300px;border-top:ridge;margin-top:30px;">入浴ありで絞り込む</p>
        <input type="radio" name="bath1" value="yes" style="margin-left:20px;"> はい
        <input type="radio" value="no"> いいえ
        
      <p>食事ありで絞り込む</p>
        <input type="radio" name="meal1" value="はい" style="margin-left:20px;"> はい
        <input type="radio" value="いいえ" checked> いいえ
      
      <p>特記事項ありで絞り込む</p>
          <input type="radio" name="notices1" value="はい" style="margin-left:20px;"> はい
          <input type="radio" value="いいえ" checked> いいえ    
          <input type="submit" value="絞り込む">
   
   </form>
</div>


