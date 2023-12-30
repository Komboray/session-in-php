<?php
//this is the start of the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Page</title>
</head>
<body>
    <a href="start.php"><p>You</p></a>
</body>
</html>
<?php
$_SESSION["username"] = "Bro";
$_SESSION["pass"] = "234";

?>