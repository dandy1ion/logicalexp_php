<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Logical Expressions Assignment</title>
    </head>
    <body>
        Part 1:
        <br />
        <?php //use conditional statement
            $month = date('F', time());
            if ($month == 'August') {
                echo "It's August, so it's really hot.";
            } else {
                echo "Not August, so at least not in the peak of the heat.";
            }
        ?>
        <br />
        Part 2:
        <br />
        <?php //use ternary operator shorthand to rewrite part 1
            $month = date('F', time());
            echo ($month == 'August') ? "It's August, so it's really hot." : "Not August, so at least not in the peak of the heat.";
        ?>
        <br />
        Part 3:
        <br />
        <?php //use switch control structure to rewrite part 1
            $month = date('F', time());
            switch($month) {
                case  'August': $say = 'It\'s August, so it\'s really hot.';     break;
                default: $say = 'Not August, so at least not in the peak of the heat.';  break;//don't need break since last statement but okay to keep for syntax flow   
            }
            echo $say;
        ?>
        <br />
        <?php  //or this way:
        //use switch control structure to rewrite part 1
            $month = date('F', time());
            switch($month) {
                case  'August': echo 'It\'s August, so it\'s really hot.';     break;
                default: echo 'Not August, so at least not in the peak of the heat.';  break;//don't need break since last statement but okay to keep for syntax flow   
            }
        ?>
        <br />
        <?php //use switch control structure to expand the functionality to output a statement for each month with a default to catch errors
            $month = date('F', time());
            switch($month) {
                case  'January': $say = 'Summer is a promissory note signed in June, it\'s long days spent and gone before you know it, and due to be repaid next January.';     break;
                case  'February': $say = 'Why does February feel like one big Tuesday?';      break;
                case  'March': $say = 'Springtime is the land awakening. The March winds are the morning yawn.';      break;
                case  'April': $say = 'Here cometh April again, and as far as I can see the world hath more fools in it than ever.';      break;
                case  'May': $say = 'The world\'s favorite season is the spring. All things seem possible in May.';      break;
                case  'June': $say = 'There are two seasons in Scotland: June and Winter';      break;
                case  'July': $say = 'Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.';      break;
                case  'August': $say = 'August, the summer\'s last messenger of misery, is a hollow actor.';      break;
                case  'September': $say = 'We know that in September, we will wander through the warm winds of summer\'s wreckage. We will welcome summer\'s ghost.';      break;
                case  'October': $say = 'I\'m so glad I live in a world where there are Octobers.';      break;
                case  'November': $say = 'The month of November makes me feel that life is passing more quickly. In an effort to slow it down, I try to fill the hours more meaningfully.';      break;
                case  'December': $say = 'God gave us memory so that we might have roses in December.';      break;
                default: $say = 'Are you sure you know your months?';  break;//don't need break since last statement but okay to keep for syntax flow   
            }
            echo $say;
        ?>
        <br />
        <?php //or this way:
        //use switch control structure to expand the functionality to output a statement for each month with a default to catch errors
            $month = date('F', time());
            switch($month) {
                case  'January': echo 'Summer is a promissory note signed in June, it\'s long days spent and gone before you know it, and due to be repaid next January.';     break;
                case  'February': echo 'Why does February feel like one big Tuesday?';      break;
                case  'March': echo 'Springtime is the land awakening. The March winds are the morning yawn.';      break;
                case  'April': echo 'Here cometh April again, and as far as I can see the world hath more fools in it than ever.';      break;
                case  'May': echo 'The world\'s favorite season is the spring. All things seem possible in May.';      break;
                case  'June': echo 'There are two seasons in Scotland: June and Winter';      break;
                case  'July': echo 'Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.';      break;
                case  'August': echo 'August, the summer\'s last messenger of misery, is a hollow actor.';      break;
                case  'September': echo 'We know that in September, we will wander through the warm winds of summer\'s wreckage. We will welcome summer\'s ghost.';      break;
                case  'October': echo 'I\'m so glad I live in a world where there are Octobers.';      break;
                case  'November': echo 'The month of November makes me feel that life is passing more quickly. In an effort to slow it down, I try to fill the hours more meaningfully.';      break;
                case  'December': echo 'God gave us memory so that we might have roses in December.';      break;
                default: echo 'Are you sure you know your months?';  break;//don't need break since last statement but okay to keep for syntax flow   
            }
        ?>
        <br />
    </body>
</html>