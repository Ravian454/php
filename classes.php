<!DOCTYPE html>
<html>
<body>
<?php
class Fruit{
    public $name;
    public $color;

    function setName($name){
        $this->name = $name;
    }
    function setColor($color){
        $this->color = $color;
    }
    function getName(){
        return $this->name;
   }
   function getColor(){
    return $this->color;
   }

}

$strawberry = new Fruit();
$strawberry->setName('Strawberry');
$strawberry->setColor("Red");

echo $strawberry->getName();
echo "<br>";
echo $strawberry->getColor();

//Vardump tells us that the provided instance is the instance of speciefied class.
echo "<br>";
var_dump($strawberry instanceof Fruit);
?>
</body>
</html>
