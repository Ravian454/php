<!DOCTYPE html>
<html>
    <body>
        
        <?php
        //Final keyword may be used to stop prevent class inheritance 
        //or to prevent method overriding
        class Province{
            public $province;
            public $city;
            public $district;
        }

        class Query{
            public function getDetails(){
                $details = array();
                for($i = 1 ; $i <= 5 ; $i++){
                    $province = $_POST["province$i"];
                    $city = $_POST["city$i"];
                    $district = $_POST["district$i"];

                    $provObj = new Province();
                    $provObj->province = $province;
                    $provObj->city = $city;
                    $provObj->district = $district;
                    $details[] = $provObj;
                }
                return $details;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $query = new Query();
            $details = $query->getDetails();

            foreach($details as $provObj){
                echo  "Province: " . $provObj->province . "<br>";
                echo  "City: " . $provObj->city . "<br>";
                echo  "District: " . $provObj->district . "<br>";
                echo "<br>";
            }
        }
        ?>

        <form action="inheritance.php" method="post">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <label for="province<?php echo $i; ?>">Province <?php echo $i; ?>:</label>
                <input type="text" name="province<?php echo $i; ?>" id="province<?php echo $i; ?>">
                <br>
                <label for="city<?php echo $i; ?>">City <?php echo $i; ?>:</label>
                <input type="text" name="city<?php echo $i; ?>" id="city<?php echo $i; ?>">
                <br>
                <label for="district<?php echo $i; ?>">District <?php echo $i; ?>:</label>
                <input type="text" name="district<?php echo $i; ?>" id="district<?php echo $i; ?>">
                <br><br>
            <?php } ?>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
