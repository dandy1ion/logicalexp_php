<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Switch Statements</title>
    </head>
    <body>
        <?php //use switch statement.
            $a = 3;

            switch($a) {
                case 0:
                    echo "a equals 0<br />";
                case 1:
                    echo "a equals 1<br />";
                case 2:
                    echo "a equals 2<br />";
                case 3:
                    echo "a equals 3<br />";
            }
        ?>
        <br />
        <?php //use switch statement.
            $a = 0;

            switch($a) {
                case 0:
                    echo "a equals 0<br />";
                case 1:
                    echo "a equals 1<br />";
                case 2:
                    echo "a equals 2<br />";
                case 3:
                    echo "a equals 3<br />";
            }
        ?>
        <br />
        <?php //use switch statement.
            $a = 2;

            switch($a) {
                case 0:
                    echo "a equals 0<br />";
                case 1:
                    echo "a equals 1<br />";
                case 2:
                    echo "a equals 2<br />";
                case 3:
                    echo "a equals 3<br />";
            }
        ?>
        <br />
        <?php //use switch statement with break statement.
            $a = 0;

            switch($a) {
                case 0:
                    echo "a equals 0<br />";
                    break;
                case 1:
                    echo "a equals 1<br />";
                    break;
                case 2:
                    echo "a equals 2<br />";
                    break;
                case 3:
                    echo "a equals 3<br />";
                    break;//don't need since last statement but okay to keep syntax flow
            }
        ?>
        <br />
        <?php //use switch statement with break statement and default statement.
            $a = 9;

            switch($a) {
                case 0:
                    echo "a equals 0<br />";
                    break;
                case 1:
                    echo "a equals 1<br />";
                    break;
                case 2:
                    echo "a equals 2<br />";
                    break;
                case 3:
                    echo "a equals 3<br />";
                    break;
                default:
                    echo "a is not 0, 1, 2, or 3<br />";
                    break;//don't need since last statement but okay to keep syntax flow
            }
        ?>
        <br />
        <?php
            //ChineseZodiac
            //whitespace doesn't matter
            //colons, semicolons and breaks do matter
            $year = 2013;
            switch(($year - 4) % 12) {//calculation checks for the remainder (ex: 0=1st year of 12year   cycle=year of the Rat.)
                case  0: $zodiac = 'Rat';     break;
                case  1: $zodiac = 'Ox';      break;
                case  2: $zodiac = 'Tiger';   break;
                case  3: $zodiac = 'Rabbit';  break;
                case  4: $zodiac = 'Dragon';  break;
                case  5: $zodiac = 'Snake';   break;
                case  6: $zodiac = 'Horse';   break;
                case  7: $zodiac = 'Goat';    break;
                case  8: $zodiac = 'Monkey';  break;
                case  9: $zodiac = 'Rooster'; break;
                case 10: $zodiac = 'Dog';     break;
                case 11: $zodiac = 'Pig';     break;
            }
            echo "{$year} is the year of the {$zodiac}.<br />";
        ?>
        <br />
        <?php  //case with single value
            $user_type = 'customer';

            switch($user_type) {
                case 'student':
                    echo "Welcome!";
                    break;
                case 'press':
                    echo "Greetings!";
                    break;
                case 'customer':
                    echo "Hello!";
                    break;
            }
        ?>
        <br />
        <?php  //case with multiple values want same statement to run
            $user_type = 'customer';
            
            switch($user_type) {
                case 'student':
                    echo "Welcome!";
                    break;
                case 'press':
                case 'customer':
                case 'admin':
                    echo "Hello!";
                    break;
            }
        ?>
        <br />
    </body>
</html>