<!DOCTYPE html>
<html>
    <body>
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
