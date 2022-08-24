<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Else & Else If</title>
    </head>
    <body>
        <?php //echo because if statement true.
            $a = 4;
            $b = 3;

            if($a > $b) {
                echo "a is larger than b";
            }
        ?>
        <br />
        <?php //no echo because if statement false.
            $a = 3;
            $b = 4;

            if($a > $b) {
                echo "a is larger than b";
            }
        ?>
        <br />
        <?php //combine previous two into else statement
            $a = 3;
            $b = 4;

            if($a > $b) {
                echo "a is larger than b";
            } else {
                echo "a is not larger than b";
            }
        ?>
        <br />
        <?php //create elseif statement
            $a = 3;
            $b = 4;

            if($a > $b) {
                echo "a is larger than b";
            } elseif($a < $b) {
                echo "a is smaller than b";
            } else {
                echo "a is equal to b";
            }
        ?>
        <br />
        <?php //create elseif statement
            $a = 3;
            $b = 3;

            if($a > $b) {
                echo "a is larger than b";
            } elseif($a < $b) {
                echo "a is smaller than b";
            } else {
                echo "a is equal to b";
            }
        ?>
        <br />
    </body>
</html>