<!docutype HTML>
<html lang = "ja">

<head>
    <meta charset = "utf-8">
    
    <title>社員登録確認画面</title>
    <link rel = "stylesheet" type = "text/css" href = "registration2.css">
</head>

<body>
    <header></header>
    
    <h1>社員登録確認画面</h1>
    
    <form method="post" action="?">
        
        <div>
            <label>名前(性)</label>
            <?php echo $_POST['family_name']; ?>
        </div>
        
        <div>
            <label>名前(名)</label>
            <?php echo $_POST['last_name']; ?>
        </div>
        
        <div>
            <label>カナ(性)</label>
            <?php echo $_POST['family_name_kana']; ?>
        </div>
    
        <div>
            <label>カナ(名)</label>
            <?php echo $_POST['last_name_kana']; ?>
        </div>

        <div>
            <label>メールアドレス</label>
            <?php echo $_POST['mail']; ?>
        </div>
        
        <div>
           <label>パスワード</label>
           <?php 
            $password = $_POST['password']??'';
            $pass = mb_strlen($password, 'UTF-8');
            for ($i=1; $i<=$pass; $i++){
                echo "●";
            } ?>
        
        </div>
        
        <div>
            <label>性別</label>
            <?php 
            if($_POST['gender'] == 0){
                echo "男";
            } else if($_POST['gender'] == 1){
                echo "女";
            }
            ?>
        </div>
        
        <div>
            <label>所属部署</label>
            <?php echo $_POST['department']; ?>
        </div>
        
        <div>
            <label>アカウント権限</label>
            <?php
            if($_POST['authority'] == 0){
                echo "一般";
            } else if($_POST['authority'] == 1){
                echo "管理者";
            }
            ?>
        </div>
    
        <input type = "submit" class = "button1" value = "前に戻る" formaction="javascript:history.back()">
    
        <input type = "submit" class = "button2" value = "登録する" formaction="regist_complete.php" method="post">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['family_name']; ?>" name = "family_name">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['last_name']; ?>" name = "last_name">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['family_name_kana']; ?>" name = "family_name_kana">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['last_name_kana']; ?>" name = "last_name_kana">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['mail']; ?>" name = "mail">
        
        <input type = "hidden" value = "<?php 
                                        echo $_POST['password']; ?>" name = "password">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['gender']; ?>" name = "gender">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['department']; ?>" name = "department">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['authority']; ?>" name = "authority">
        
    </form>
    
    <footer></footer>

</body>
</html>