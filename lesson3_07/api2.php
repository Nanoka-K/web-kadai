<?php
    //formのmethodがgetのときはPOSTのところがGETになるだけ
    var_dump($_GET['zip']);
    $url = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=' . $_GET['zip'];
    //file_get_contents関数→JSON形式データの理由
    $response = file_get_contents($url);

    var_dump($url);
    //JSON形式で使う
    // json_decode()は第二引数まで入れる（初期値false,配列arrayで使いたいならtrue）
    $response1 = json_decode($response,true);
    
    echo '<pre>';
    var_dump($response);
    var_dump($response1['results'][0]);
    echo '<pre>';

    //多次元配列[][][]　↑のvar_dumpで確認しながら
    echo '<p>入力された郵便番号は'.$response1['results'][0]['address1'].$response1['results'][0]['address2'].$response1['results'][0]['address3'].'の郵便番号です。</p>';
?>