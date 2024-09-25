<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset = "UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            function sort_2way ($array, $order) {
                if ($order === TRUE) {
                    sort($array);
                } else {
                    rsort($array);
                } 
                

                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }

            $num = [27, 51, 24, 33, 76];

            echo '昇順にソートします。<br>';
            sort_2way($num, TRUE);

            echo '降順にソートします。<br>';
            sort_2way($num, FALSE);

        ?>
    </p>
</body>

</html>
