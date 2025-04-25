<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Game</title>
</head>
<body style="background-color: #ffce93; margin-left: 50px; margin-right: 50px; background-image: url('back_img.jpg');background-size: cover; background-repeat:no-repeat; background-position: center;">
    
    <h1>Let's Roll!</h1>
    <?php
        $FaceNameSingular = array("one", "two", "three", "four", "five", "six");
        $FaceNamePlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

        function checkForDoubles($num1, $num2)
        {
            //Let the funtion grab global variables
            global $FaceNameSingular;
            global $FaceNamePlural;

            // See if $num1 and $num2 are a match
            if ($num1 == $num2)
            {
                echo "<p>The roll was double ", $FaceNamePlural[$num1 - 1], "</p>";
                return true;
            }
            else
            {
                echo"<p>The roll was a ", $FaceNameSingular[$num1 - 1], " and a ", $FaceNameSingular[$num2 - 1], ".<p>";
                return false;
            }
        }// End of checkForDoubles()

        function displayScoreText($score)
        {
            switch($score)
            {
                case 2:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled <strong><em>Snake Eyes!</em></strong></p>";
                    break;
                case 3:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled a <strong><em>Loose Deuce!</em></strong></p>";
                    break;
                case 5:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled a <strong><em>Fever Five!</em></strong></p>";
                    break;
                case 7:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled a <strong><em>Natural!</em></strong></p>";
                    break;
                case 9:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled a <strong><em>Nina!</em></strong></p>";
                    break;
                case 11:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled a <strong><em>Yo!</em></strong></p>";
                    break;
                case 12:
                    echo "<p style='color:rgb(237, 11, 11)'>You rolled a <strong><em>Boxcar!</em></strong></p>";
                    break;
                default:
                    echo "<p>No special scoring</p>";
                    break;      
            }//End of Switch Statement
        }// End of displayScoreText()

        // We're back to the global code
        $Dice = array();
        $DoublesCount = 0;
        $RollCount = 1;

        while ($RollCount <=3) 
        {
            $Dice[0] = rand(1,6);
            $Dice[1] = rand(1,6);
            $Total = $Dice[0] + $Dice[1];

            echo "<p>The total score for roll $RollCount was: $Total </p>";

            $IsDoubles = checkForDoubles($Dice[0], $Dice[1]);
            displayScoreText($Total);

            if($IsDoubles == true)
            {
                ++$DoublesCount;
            }

            ++$RollCount;
            echo "<hr/>";
        }// End of while loop
        echo "<p><strong>Doubles occured on $DoublesCount rolled.</strong></p>";
        
        //button
        echo "<input type='button' name='reset' value='Roll Again!' onclick='location.reload();' style= 'background-color: rgb(237, 11, 11); border-radius: 4px; color:white; padding-top: 6px; padding-bottom: 5px; padding-right:15px; padding-left: 15px;'></p>"         
    ?>
</body>
</html>