<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Status</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $student_id = $_POST['student_id'];
            $student_name = $_POST['student_name'];
            $grade = $_POST['grade'];
            
            // Logic using OR and AND
            // a = 90+; b = 75-89


            if ($grade >= 90 || ($grade >= 90 && $grade <= 90)) {
                $result = "A";
                echo "<h2>Congratulations, $student_name!</h2>";
                echo "<p>You passed the prelims with a grade of $result!</p>";
            } elseif ($grade >= 75 && $grade < 90) {
                $result = "B";
                echo "<h2>Congratulations, $student_name!</h2>";
                echo "<p>You passed the prelims with a grade of $result!</p>";
            } elseif ($grade <= 60 && $grade < 70) {
                $result = "C";
                echo "<h2>Sorry, $student_name.</h2>";
                echo "<p>You failed the prelims.</p>";
            } else {
                $result = "F";
                echo "<h2>Sorry, $student_name.</h2>";
                echo "<p>You failed the prelims.</p>";
            }
        }
        ?>
        <br>
        <a class="back-button" href="index.php">Back</a> 
    </div>
</body>
</html>
