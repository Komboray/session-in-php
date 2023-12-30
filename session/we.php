<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trial</title>
</head>
<body>
    <form action="we.php" method="post">
        <input type="text" id = "you" name = "you">
        <input type="submit" name = "submit" value="Send Info">
        
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
  $you = $_POST["you"];

   echo $you;
}

?>