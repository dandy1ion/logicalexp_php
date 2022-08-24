<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Comparison and Logical Operators</title>
    </head>
    <body>
        <?php //use logical operator &&.
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 20;
            //if statement only half true = won't run
            if(($a > $b) && ($c > $d)) {
                echo "a is larger than b AND";
                echo " c is larger than d";
            }
        ?>
        <br />
        <?php //use logical operator &&.
            $a = 4;
            $b = 3;
            $c = 20;
            $d = 1;
            //if statements both true = will run
            if(($a > $b) && ($c > $d)) {
                echo "a is larger than b AND";
                echo " c is larger than d";
            }
        ?>
        <br />
        <?php //use logical operator ||.
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 20;

            if(($a > $b) || ($c > $d)) {
                echo "a is larger than b OR";
                echo " c is larger than d";
            }
        ?>
        <br />
        <?php //use logical operator &&.
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 1;

            if(($a >= $b) && ($c >= $d)) {
                echo "a is larger than or equal to b AND";
                echo " c is larger than or equal to d";
            }
        ?>
        <br />
        <?php //good way to set default values
            if(!isset($e)) {
                $e = 200;
            }
            echo $e;
        ?>
        <br />
        <?php  //$e already set at 100 so don't need default value
            $e = 100;
            if(!isset($e)) {
                $e = 200;
            }
            echo $e;
        ?>
        <br />
        <?php  //don't reject 0 or 0.0
            $quantity = 0;
            if(empty($quantity) && !is_numeric($quantity)) {
                echo "You must enter a quantity.";
            }
        ?>
        <br />
        <?php  //rejects empty string (both empty and not numeric)
            $quantity = "";
            if(empty($quantity) && !is_numeric($quantity)) {
                echo "You must enter a quantity.";
            }
        ?>
        <br />
    </body>
</html>