<?php
     $name = [
        'sato' => '佐藤',
        'suzuki' => '鈴木',
        'takahashi' => '高橋',
        //配列の最後は、カンマをつけること（値を追加する可能性があるため）
    ];

    //キー値も含めた配列の取り出し
    foreach($name as $key => $value){
        echo 'キーは'.$key.'、名前は'.$value.'<br>';
    }
?>