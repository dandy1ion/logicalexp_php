<!DOCTYPE html>

<html lang="en">
    <head>
    <title>If Statements</title>
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
        <?php //echo because second if statements true.
            $a = 3;
            $b = 4;

            if($a > $b) {
                echo "a is larger than b";
            }
            if($a < $b) {
                echo "a is not larger than b";
            }
        ?>
        <br />
        <?php  //Only welcome new users
            $new_user = true;

            if($new_user) {
                echo "<h1>Welcome!</h1>";
                echo "<p>We are glad you decided to join us.</p>";
            }
        ?>
        <br />
        <?php  //Don't devide by zero(doesn't account for negative numbers)
            $numerator = 20;
            $denominator = 4;

            if($denominator > 0) {
                $result = $numerator / $denominator;
                echo "Result: {$result}";
            }
        ?>
        <br />
        <?php  //Don't devide by zero, still runs with echo outside because if statement true = $result variable defined
            $numerator = 20;
            $denominator = 4;

            if($denominator > 0) {
                $result = $numerator / $denominator;
            }
            echo "Result: {$result}";
        ?>
        <br />
        <?php  //Won't run because if statement false = doesn't define $result variable
            $numerator = 20;
            $denominator = 0;

            if($denominator > 0) {
                $result = $numerator / $denominator;
            }
            echo "Result: {$result}";
        ?>
        <br />
        <?php  //Define $result first so still have echo of "Result: 0" even with if statement being false(think it out, keep path through code in mind)
            $numerator = 20;
            $denominator = 0;
            $result = 0;

            if($denominator > 0) {
                $result = $numerator / $denominator;
            }
            echo "Result: {$result}";
        ?>
        <br />
    </body>
</html>