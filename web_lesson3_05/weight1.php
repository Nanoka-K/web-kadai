<?php
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
     echo '適正体重は' . 22*$height*$height . 'kgです。';
?>