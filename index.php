<?php
//no php here,
?>
<!DOCTYPE html>
<html>
<head>
    <title>SOFe Generator</title>
    <style>
        body{
            font-family: "Comic Sans MS";/* Nice Meme*/
        }
    </style>
</head>
<body>
<h1>SOFe Avatar Generator</h1>
<img src="SOFe.png" width="100px" height="100px">
<br>
<br>
<form action="action.php" method="post">
    Username: <input type="text" name="username" required><br>
    Select your background color: <input type="color" name="backgroundcolor" value="#ECECEC" required><br>
    Select your main color: <input type="color" name="maincolor" value="#64D958" required><br>
    <pre>For hex color list <a href="http://www.w3schools.com/colors/colors_names.asp" target="_blank">click here</a></pre>
    Select your orientation (anti-Clockwise): <br>
    <input type="radio" name="rotate" value="0" checked> 0<br>
    <input type="radio" name="rotate" value="90"> 90<br>
    <input type="radio" name="rotate" value="180"> 180<br>
    <input type="radio" name="rotate" value="270"> 270<br>
    <input type="submit" value="Submit">
</form>
</body>
</html>