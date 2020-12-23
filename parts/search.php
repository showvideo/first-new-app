
<div style="display:inline-block;border:ridge;width:400px;vertical-align:top;margin-left:6px;padding-left:20px;">

    <form action="../search/index.php" method="post">
        
    <h4>名前</h4>
        <input type="text" name="search_name" style="width:100px;height:34px;margin-left:20px;">
    
    <h4>来所</h4>
        <input type="text" name="search_visit" style="width:30px;height:40px;margin-left:20px;">時<input type="text" name="search_visit" style="width:30px;height:40px;">分
        
    <h4>退所</h4>
        <input type="text" name="search_exit" style="width:30px;height:40px;margin-left:20px;">時<input type="text" name="visit" style="width:30px;height:40px;">分
        
      <h4>バイタル</h4>
        最高血圧(mmhg)<input type="text" name="vital1" style="width:30px;">～<input type="text" name="vital1" style="width:40px;height:45px;">
      
        最低血圧(mmhg)<input type="text" name="vital2" style="width:30px;">～<input type="text" name="vital2" style="width:40px;height:45px;">
        
        脈拍(拍/分)<input type="text" name="vital3" style="width:30px;">～<input type="text" name="vital3" style="width:40px;height:45px;">
        
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

