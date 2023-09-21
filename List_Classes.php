<?php
include('config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST OF CLASSES</title>
</head>
<body>
    <form  method="POST">
        <label for="course_code">Course Code:</label>
        <input type="text" id="course_code" name="course_Code" required><br><br>

        <input type="submit" value="Search Classes">
    </form>

    <div>
        <!-- 
            LIST OF CLASSES SHOULD BE LISTED HERE
            (PREFERABLY, TABLE FORMAT)
        -->
    </div>

</body>
</html>