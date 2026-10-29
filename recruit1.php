<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>採用応募画面</title>
        <link rel = "stylesheet" type = "text/css" href = "recruit1.css">
    </head>
    
    <body>
        <header></header>
        
    <h1>採用応募画面</h1>
    <form method = "post" action = "recruit2.php">
             
        <div>
            <label>名前(性)</label>
            <input type = "text" class = "text" size = "35"  name ="family_name" maxlength = "10" pattern = "^[ぁ-ん一-龠ー]*$" required>
        </div> 
        
        <div>
            <label>名前(名)</label>
            <input type = "text" class ="text" size = "35" name = "last_name" maxlength = "10" pattern = "^[ぁ-ん一-龠ー]*$" required>
        </div>
        
        <div>
            <label>カナ(性)</label>
            <input type = "text" class = "text"
                   size = "35" name = "family_name_kana" maxlength = "10" pattern = "^[ァ-ンヴー]*$" required>
        </div>
        
        <div>
            <label>カナ(名)</label>
            <input type = "text" class = "text"
                   size = "35" name = "last_name_kana" maxlength = "10" pattern = "^[ァ-ンヴー]*$"　required>
        </div>
        
        <div>
            <label>生年月日</label>
            <select name = "birth_year" required>
                <option value="">年</option>
                <?php
                $currentyear = (int)date('Y');
                for($year = $currentyear; $year >= 1990; $year--){
                    echo "<option value ='{$year}'>{$year}年</option>";
                }
                ?>
            </select>
            
            <select name = "birth_month" required>
                <option value="">月</option>
                <?php
                for($month = 1; $month <= 12; $month++){
                    echo "<option value = '{$month}'>{$month}月</option>";
                }
                ?>
            </select>
            
            <select name = "birth_day" required>
                <option value="">日</option>
                <?php
                for($day = 1; $day <= 31; $day++){
                    echo "<option value = '{$day}'>{$day}日</option>";
                }
                ?>
            </select>
        </div>
        
        <div>
            <label>メールアドレス</label>
            <input type = "text" class = "text"
                   size = "35" name = "mail" maxlength = "100" pattern = "^[0-9a-zA-Z\-\@\.]*$" required>   
        </div>
        
        <div>
            <label>電話番号(携帯)</label>
            <input type = "tel" class = "text"
                   size = "35" name = "tel" maxlength = "11" pattern = "^[0-9]{11}$" placeholder = "※ハイフンなし" required>
        </div>
        
        <div>
            <label>性別</label>
            <label><input type = "radio" name = "gender" value = "0">男</label>
            <label><input type = "radio" name = "gender" value = "1" required>女</label>
        </div>
        
        <div>
            <label>郵便番号</label>
            <input type = "text" class = "text"
                   size = "35" name = "postal_code" pattern="^[0-9]{7}$" placeholder = "※ハイフンなし" required>
        </div>
        
        <div>
            <label>住所（都道府県）</label>
            <select name="prefecture" required>
                <option value="" disabled selected></option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
        </div>
        
        <div>
            <label>住所（市区町村）</label>
            <input type = "text" class = "text"
                   size = "35" name = "address_1" maxlength = "10" pattern = "^[ぁ-んァ-ンヴ一-龠ー0-9０-９\-－\s　]*$" required>
        </div>
        
        <div>
            <label>住所（番地）</label>
            <input type = "text" class = "text"
                   size = "35" name = "address_2" maxlength = "100" pattern = "^[ぁ-んァ-ンヴ一-龠ー0-9０-９\-－\s　]*$" required>
        </div>
       
        <div>
            <label>住所（建物名等）</label>
            <input type = "text" class = "text"
                   size = "35" name = "address_3" maxlength = "100" pattern = "^[ぁ-んァ-ンヴ一-龠ー0-9０-９a-zA-Z\-－\s　]*$">
        </div>
        
        <div>
            <label>最終学歴</label>
            <select name = "educational_background" required>
                <option value="" disabled selected></option>
                <option value = "1">中学校卒業</option>
                <option value = "2">高等学校卒業</option>
                <option value = "3">専門学校卒業</option>
                <option value = "4">短期大学卒業</option>
                <option value = "5">四年制大学卒業</option>
                <option value = "6">大学院修了</option>
                <option value = "0">その他</option>
            </select>
        </div> 
        
        <div>
            <input type = "submit" class = "submit" value = "確認する">
        </div>
    
            </form>
        

        
        <footer></footer>
    
    </body>
</html>