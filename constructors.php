<!DOCTYPE html>
<html>
    <body>
        <?php
        class Car{
            public $name;
            public $model;

            function __construct($name, $model)
            {
                $this -> name = $name;
                $this -> model = $model;
            }

            function getName(){
                return $this->name;
            }
            function getModel(){
                return $this->model;
            }
            // Destruct must not returns a value.
            function __destruct(){
                echo "The car is $this->name.";
            }
        }
        $Mercedes = new Car("Mercedes", "2022");
        echo $Mercedes->getName();
        echo "<br>";
        echo $Mercedes->getModel();


        ?>
    </body>
</html>