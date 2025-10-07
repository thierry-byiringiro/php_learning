<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="#" method="post">
        <input type="number" name="score" placeholder="enter your score">
        <input type="submit" value="Check Score" name="submit">
    </form><br><br>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
                $score = $_POST['score'];
        if($score >= 90 && $score <= 100){
                echo "<h1>A</h1>";
        }else if($score >=80 && $score <= 89){
                echo "<h1>B</h1>";
        }elseif($score >= 70 && $score <= 79){
                echo "<h1>C</h1>";
        } elseif($score >= 60 && $score <= 69){
                echo "<h1>D</h1>";
        }elseif($score >= 0 && $score <= 50){
                echo "<h1>F</h1>";
        }else{
                echo "invalid marks";
        }
                }
    ?> -->
    <form action="#" method="post">
        <input type="number" name="month" id="" placeholder="Enter a number to see which month">
        <input type="submit" value="See the month">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $month = $_POST["month"];
        switch ($month) {
                case 1:
                        echo "January";
                        break;
                case 2:
                        echo "February";
                        break;
                case 3:
                        echo "March";
                        break;
                case 4:
                        echo "April";
                        break;
                case 5:
                        echo "May";
                        break;
                case 6:
                        echo "June";
                        break;
                case 7:
                        echo "July";
                        break;
                case 8:
                        echo "August";
                        break;
                case 9:
                        echo "September";
                        break;
                case 10:
                        echo "October";
                        break;
                case 11:
                        echo "Novermber";
                        break;
                case 12:
                        echo "December";
                        break;
                
                default:
                        echo "No matching match";
                        break;
        }
    }
    ?>
</body>
</html>