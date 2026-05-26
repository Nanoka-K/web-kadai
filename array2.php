<?php
    $name = [
        'sato' => '佐藤',
        'suzuki' => '鈴木',
        'takahashi' => '高橋',
        //配列の最後は、カンマをつけること（値を追加する可能性があるため）
    ];

    var_dump($name);
    //配列から値の取り出し
    var_dump($name['suzuki']);
?>