<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

</head>
<link rel="stylesheet" href="style.css">
<body>
    <form action="login.php" method="POST">
         <label for="username">Enter Username</label>
         <input type="text" name="username" ><br>
         <label for="password">Enter password</label>
         <input type="password" name="password" ><br>
         <input type="submit" name = "submit" value="Submit">
       
    </form>
</body>
</html>
<?php

if(isset($_POST["submit"])){

    if(!empty($_POST["username"]) && 
       !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"];
            echo $_SESSION["password"];

            header("Location:home.php");
        }
}else{
    echo "No data there";
}

?>

