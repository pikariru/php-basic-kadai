<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {
            // プロパティを定義する                        
            public $name;
            public $price;
        
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        
        // インスタンス化する
        $food = new Food('potato', 250);
        
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;
        
            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        
            // heightプロパティの値を取得するためのメソッドを定義する
            public function getHeight() {
                return $this->height;
            }
        }
        
        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);
        
        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo "<br>";
        
        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
        echo "<br>";
        
        // Foodクラスのpriceプロパティの値を出力する
        echo $food->price . "<br>";
        
        // Animalクラスのheightプロパティの値を出力する
        echo $animal->getHeight();
        ?>
     </p>
 </body>
 
 </html>