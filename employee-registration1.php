<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>社員登録画面</title>
        <link rel = "stylesheet" type = "text/css" href = "style-registration1.css">
    </head>
    
    <body>
        <header></header>
        
    <h1>社員登録画面</h1>
    <form method = "post" action = "employee registration2.php">
             
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
            <label>メールアドレス</label>
            <input type = "text" class = "text"
                   size = "35" name = "mail" maxlength = "100" pattern = "^[0-9a-zA-Z\-\@\.]*$" required>   
        </div>
        
        <div>
            <label>パスワード</label>
            <input type = "password" class = "text"
                   size = "35" name = "password" minlength ="6" maxlength = "10" pattern = "^[a-zA-Z0-9]*$" placeholder="※半角英数字6字以上" required>
        </div>
        
        <div>
            <label>性別</label>
            <label><input type = "radio" name = "gender" value = "0">男</label>
            <label><input type = "radio" name = "gender" value = "1" required>女</label>
        </div>
        
        <div>
            <label>部署</label>
            <select name="department" required>
                <option value="" disabled selected></option>
                <option value="人事部">人事部</option>
                <option value="総務部">総務部</option>
                <option value="営業部">営業部</option>
                <option value="経理部">経理部</option>
                <option value="システム部">システム部</option>
                <option value="マーケティング部">マーケティング部</option>
            </select>
        </div>
        
        <div>
            <label>アカウント権限</label>
            <select name = "authority" required>
                <option value = "0">一般社員</option>
                <option value = "1">人事部社員</option>
            </select>
        </div> 
        
        <div>
            <input type = "submit" class = "submit" value = "確認する">
        </div>
    
            </form>
        

        
        <footer></footer>
    
    </body>
</html>