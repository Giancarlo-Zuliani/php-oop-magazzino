<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-magazzino</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><?php echo "connesso" ?></h1>

    <?php

    class Product{
      public $name;
      public $weight;
      public $price;
      function __construct($name,$weight,$price){
        $this -> name = $name;
        $this -> weight = $weight;
        $this -> price = $price;
      }
    }

    class Storage{
      public $name;
      public $adress;
      public $products;
      function __construct($name, $adress , $arr = []){
        $this -> name = $name;
        $this -> adress = $adress;
        if (count($arr != 0)) {
          $this -> products = $arr;
        }else {
          $this -> products = [];
        }
      }
    }

    $proarr = [];
    $emptyarr = [];

    $pro1 = new Product ('culo' , 3 ,150);
    $pro2 = new Product ('gino' , 4 ,1502);
    $pro3 = new Product ('caio' , 4 , 45454);

    array_push($proarr , $pro1, $pro2 ,$pro3);

    $ferramenta = new Storage('ferramenta' , 'via e man dal cul' );



    var_dump($ferramenta);

     ?>


  </body>
</html>
