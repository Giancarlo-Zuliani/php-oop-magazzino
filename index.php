<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-magazzino</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
    // PRODUCT CLASS
      class Product{

        public $name;
        public $weight;
        public $price;

        function __construct($name,$weight,$price){
          $this -> name = $name;
          $this -> weight = $weight;
          $this -> price = $price;
        }
      };

      // STORAGE CLASS
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

        //PRINT PRODUCT IN STORAGE FUNCTION
        public function printProducts(){
          echo "<h2>" . $this -> name . "</h2>";
          echo "<h5>" . $this -> adress . "</h5><ul>";
          foreach ( $this -> products as  $value) {
            echo "<li>" . $value -> name . " weight : " . $value -> weight . " price : " . $value -> price . "</li>";
          }
          echo "</ul>";
        }
      };

      $proarr = [];

      $pro1 = new Product ('box' , 3 , "3EUR");
      $pro2 = new Product ('paper' , 0.4 ,"5EUR");
      $pro3 = new Product ('pen' , 0.1 , "15EUR" );

      array_push($proarr , $pro1, $pro2 ,$pro3);

      $myStorage = new Storage('magazzino' , 'via San Carlo 30', $proarr);

      $myStorage-> printProducts();
    ?>

  </body>
</html>
