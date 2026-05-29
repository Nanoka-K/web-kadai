<?php
    //htmlspecialchars関数→(変換する文字列,フラグ定数,エンコーディング)
    echo htmlspecialchars($_POST['a'],ENT_QUOTES,'UTF-8') ;
?>