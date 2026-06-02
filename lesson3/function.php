<?php

//関数は型をしっかり定める
//関数の定義→function 関数名(型名 変数名（わかりやすければなんでもいい）):戻り値{}
function str2html(string $string):string{
        //文字列を返す        
        return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
}
?>