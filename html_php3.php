<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- htmlとphpの共存 -->
    <?php
        $count = 1;
        if($count === 0){
            echo '<p>はじめまして</p>';
        }else{
            echo '<p>いつもありがとうございます</p>';
        }
    ?>
</body>
</html>