<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <input type="number" name="score" placeholder="enter your score">
        <input type="submit" value="Check Score" name="submit">
    </form>
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
    ?>
</body>

</html>