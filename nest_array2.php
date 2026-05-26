<?php
    //連想配列（JavaでいうMap）の作成
    //配列の要素が配列になっている
    $people [] = ['name' => '佐藤','blood' => 'A'];
    $people [] = ['name' => '田中','blood' => 'B'];
    $people [] = ['name' => '加藤','blood' => 'O'];

    foreach($people as $people_key => $person){
            // var_dump($person);
            //nameだけ取り出す
            var_dump($person['name']);
    }
?>