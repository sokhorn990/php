<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test_Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="index.php">
</head>

<body> 
    <h1>TEST</h1>
    <div class="container">
        <form action="test.php" method="POST" enctype="multipart/form-data">
            <label for="username">UserName:</label>
            <input type="text"><br><br>
            <label for="password">Password:</label>
            <input type="password">
            <br><br>
            <input type="file" name ="profile">
            <input type="submit" value="submit" name="submit"/>
        </form>
    </div>
</body>
</html>