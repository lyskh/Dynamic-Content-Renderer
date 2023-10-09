<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Grade Input Form</h1>
    <form action="process.php" method="post">
        <label for="id">Student ID: </label>
            <input type="text" id="name" name="student_id" required>
            <br><br>
        <label for="name">Student Name:</label>
            <input type="text" name="student_name" required>
            <br><br>
        <label for="grade">Grade:</label>
            <input type="number" name="grade" min="0" max="100"><br>
            <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
