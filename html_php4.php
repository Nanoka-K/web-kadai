<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- if文のもう一つの方法 -->
     <!--コロンで区切る -->
    <?php $count = 0?>
    <?php if($count === 0):?>
    <p>はじめまして</p>
    <?php else:?>
    <p>いつもありがとうございます</p>
    <!-- ここは終わるからセミコロン -->
    <?php endif;?>
</body>
</html>