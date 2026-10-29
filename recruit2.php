<!docutype HTML>
<html lang = "ja">

<head>
    <meta charset = "utf-8">
    
    <title>応募者情報確認画面</title>
    <link rel = "stylesheet" type = "text/css" href = "recruit2.css">
</head>

<body>
    <header></header>
    
    <h1>応募者情報確認画面</h1>
    
    <form method="post" action="?">
        
        <div>
            <label>名前(性)：</label>
            <?php echo $_POST['family_name']; ?>
        </div>
        
        <div>
            <label>名前(名)：</label>
            <?php echo $_POST['last_name']; ?>
        </div>
        
        <div>
            <label>カナ(性)：</label>
            <?php echo $_POST['family_name_kana']; ?>
        </div>
    
        <div>
            <label>カナ(名)：</label>
            <?php echo $_POST['last_name_kana']; ?>
        </div>

        <div>
            <label>メールアドレス：</label>
            <?php echo $_POST['mail']; ?>
        </div>
        
        <div>
            <label>電話番号(携帯)：</label>
            <?php echo $_POST['tel']; ?>
        </div>
        
        <div>
            <label>性別：</label>
            <?php 
            if($_POST['gender'] == 0){
                echo "男";
            } else if($_POST['gender'] == 1){
                echo "女";
            }
            ?>
        </div>
        
        <div>
            <label>郵便番号：</label>
            <?php echo $_POST['postal_code']; ?>
        </div>
        
        <div>
            <label>住所（都道府県）：</label>
            <?php echo $_POST['prefecture']; ?>
        </div>
        
        <div>
            <label>住所（市区町村）：</label>
            <?php echo $_POST['address_1']; ?>
        </div>
        
        <div>
            <label>住所（番地）：</label>
            <?php echo $_POST['address_2']; ?>
        </div>
        
        <div>
            <label>住所（建物名等）：</label>
            <?php echo $_POST['address_3']; ?>
        </div>
        
        <div>
            <label>最終学歴：</label>
            <?php
            if($_POST['educational_background'] == 0){
                echo "その他";
            } else if($_POST['educational_background'] == 1){
                echo "中学校卒業";
            } else if($_POST['educational_background'] == 2){
                echo "高等学校卒業";
            } else if($_POST['educational_background'] == 3){
                echo "専門学校卒業";
            } else if($_POST['educational_background'] == 4){
                echo "短期大学卒業";
            } else if($_POST['educational_background'] == 5){
                echo "四年制大学卒業";
            } else if($_POST['educational_background'] == 6){
                echo "大学院修了";
            }
            ?>
        </div>
    //生年月日を1つのデータにして格納するコード記載する
        
        <input type = "submit" class = "button1" value = "前に戻る" formaction="javascript:history.back()">
    
        <input type = "submit" class = "button2" value = "登録する" formaction="recruit3.php" method="post">
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
                                        echo $_POST['tel']; ?>" name = "tel">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['gender']; ?>" name = "gender">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['postal_code']; ?>" name = "postal_code">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['prefecture']; ?>" name = "prefecture">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['address_1']; ?>" name = "address_1">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['address_2']; ?>" name = "address_2">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['address_3']; ?>" name = "address_3">
        <input type = "hidden" value = "<?php 
                                        echo $_POST['educational_background']; ?>" name = "educational_background">
        
    </form>
    
    <footer></footer>

</body>
</html>