<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- //タグを使っている以上はhtmlの中に入れる -->
    <?php
    require_once '../lesson3/function.php';
    //適正体重の計算プログラム（アプリ）
    //floatにキャストして、$_POSTで受け取る(身長)
    $height = (float)$_POST['height'];
    var_dump($height);

    //floatにキャストして、$_POSTで受け取る(体重)
    $weight = (float)$_POST['weight'];
    var_dump($weight);

    //身長のバリデーションチェック
    if(!(0<$height && $height<3)){
        echo '身長を正しく入力してください。'; 
        //exitで処理を止める(正しくないものを元に変な出力をしないため)
        exit;
    }
    //↓バリデーションチェック前のコメント
    //身長が0mより大きく3m未満で表示    
    //どっとの前後スペース入れる
    //違う場合は正しく入力させる
    
    //体重のバリデーションチェック
     if(!(30<$weight && $weight<200)){
        echo '体重を正しく入力してください。';
        //exitで処理を止める(正しくないものを元に変な出力をしないため)
        exit; 
    }
    //適正体重の計算
    $goal_weight = 22*$height*$height;

    //適正体重との差異
    $defference = abs($goal_weight - $weight);

    //表示
    // echo '<br>体重'.$weight.'kg</br>';
    // echo '理想'.$goal_weight.'kg';
    // echo '<br>後'.$defference.'kgで適正体重です。</br>';
    
    //関数str2htmlを使う（表示じゃなくて受け取ったときにサニタイジングしてもいい）
    echo '<br>体重'.str2html($weight).'kg';
    echo '<br>理想'.str2html($goal_weight).'kg';
    echo '<br>後'.str2html($defference).'kgで適正体重です';
?>
</body>
</html>
