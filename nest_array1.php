<?php
    //連想配列（JavaでいうMap）の作成
    //配列の要素が配列になっている
    $people [] = ['name' => '佐藤','blood' => 'A'];
    $people [] = ['name' => '田中','blood' => 'B'];
    $people [] = ['name' => '加藤','blood' => 'O'];
    // var_dump($people);

    //連想配列の取り出し
    //配列名 [一次元目のキー(ここでいう0,1,2)] [二次元目のキー(ここでいうname,blood)]
    // echo '名前は'.$people[1]['name'].'血液型は'.$people[1]['blood'];

    //$people_key←0,1,2の方 $person←イコールの
    foreach($people as $people_key => $person){
            // var_dump($people_key);
            // var_dump($person);
            foreach($person as $person_key => $value){
                // var_dump($person_key);
                var_dump($value);
            }
    }
?>