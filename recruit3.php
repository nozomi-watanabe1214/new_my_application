<?php
mb_internal_encoding("utf8");

$success_message = '';
$error_message = '';

try{

$pdo = new PDO("mysql:dbname=recruitment_management;host=localhost;","root","");

//$password_after = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
    //if(isset($_POST['password'])){
    //$password_after = password_hash($_POST['password'],
                              //PASSWORD_DEFAULT);
    
    }

$application_date = date('Y-m-d H:i:s');

    $pdo -> exec("insert into account(family_name,last_name,family_name_kana,last_name_kana,birth_date,mail,tel,gender,postal_code,address,educational_background,workplace,application_date)
values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['tel']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['address']."','".$_POST['educational_background']."','".$_POST['workplace']."','".$registered_time."');");
    
    $success_message = "採用応募を受付いたしました";

} catch(PDOException $e){
    $error_message = "エラーが発生したため採用応募受付をできませんでした";
}
?>
//trycatchうまくいってない

<?php
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>採用応募完了画面</title>
        <link rel = "stylesheet" type = "text/css" href = "style4.css">
    </head>
    
    <body>
        <header></header>
        
        <h1>採用応募完了画面</h1>
        
        <div class = "complete">
            <?php if ($success_message): ?>
            <h2 style = "color:black">
            <?php echo ($success_message); ?></h2>
            
            <?php endif; ?>
            
            <?php if ($error_message): ?>
            <h2 style = "color:red;"><?php echo ($error_message); ?></h2>
            
            <?php endif; ?>
        
            <form action="index.html">
            <input type = "submit" class = "submit" value = "TOPページへ戻る"></form> 
        </div>
        
        <footer></footer>
        
    </body>
</html>