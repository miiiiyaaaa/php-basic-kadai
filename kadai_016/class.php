<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset = "UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {

            //プロパティの定義
            public $name;
            public $price;

            //メソッドの定義
            public function show_price() {
                echo $this->price . '<br>';
            }

            //コンストラクタの定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

        }

        $food = new Food('おにぎり', 110);

        print_r($food);
        echo '<br>';
        $food->show_price();


        class Animal {

            //プロパティの定義
            public $name;
            public $height;
            public $weight;

            //メソッドの定義
            public function show_height() {
                echo $this->height . '<br>';
            }

            //コンストラクタの定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;

            }
        }

        $animal = new Animal('猫', '50', '4500');

        print_r($animal);
        echo '<br>';
        $animal->show_height();
        ?>
    </p>
</body>

</html>
