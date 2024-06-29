<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ご注文が完了しました</title>
    </head>
    <body>
        <h1>ご注文ありがとうございました</h1>
    </body>
</html>
<?php
/*$mysqli = new mysqli('localhost', 'root', '', 'commodity');
if(!empty($_POST["inputName"])){
    try {
        $sql = 'INSERT INTO sortable(name) VALUES(:tyumon)';
        $stmt = $dbh ->prepare($sql);

        $stmt->bind_param(':tyumon', $_POST['inputName'],PDO::PARAM_STR);
        $stmt->execute();
        
        exit();
    }
    catch(PDOException $e) {
        echo "データベースに接続できません".$e->getMessage();    
    }
}   */
$dsn = 'mysql:host=localhost;dbname=form';
try{
    $pdo = new PDO($dsn, "root", "23ho54", [ 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    $sql = "INSERT INTO commodity(naiyo) VALUES(:tyumon)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":tyumon",$_POST["inputName"],PDO::PARAM_STR);
    $stmt->execute();
    exit();
}catch(PDOException $e){
    echo $e -> getMessage() . "\n";
    exit();
}
?>
