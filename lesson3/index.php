<?php
    //fopen関数→csvファイルを読み込むために必要
    //'パス','読み込みモード(p96)'
    //r→読み込み専用
    $fp = fopen('bookdata.csv','r');
    // var_dump($fp);

    if($fp === false){
        echo 'ファイルのオープンに失敗しました';
        //exit→PHPの処理を終了する命令
        exit;
    }

    //1行処理する
    //fgetcsv(ハンドル);
    // $row = fgetcsv($fp);
    // var_dump($row);
    // //まったく同じコードでも、ファイルポインタが１個進む
    // //2行目
    // $row = fgetcsv($fp);
    // var_dump($row);
    // //3行目
    // $row = fgetcsv($fp);
    // var_dump($row);
    // //4行目
    // $row = fgetcsv($fp);
    // var_dump($row);
    // //5行目
    // $row = fgetcsv($fp);
    // var_dump($row);
    // //全部読み込んだら最後はfalseになる
    // $row = fgetcsv($fp);
    // var_dump($row);

    //while文でまとめて出力 p104
    while($row = fgetcsv($fp)){
        //preタグではさむと、きれいに整列する
        echo '<pre>';
        var_dump($row);
        echo '</pre>';

        echo '<p>書籍名'.$row[0].'</p>';
        echo '<p>著者名'.$row[4].'</p>';
        echo '<p>発売日'.$row[3].'</p>';
    }
?>