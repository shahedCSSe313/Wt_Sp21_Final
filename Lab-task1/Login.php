<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username == "shahed" && $password=="12345"){
        setcookie
        header( "Location:dashboard.php"); 
    }
}

?>

<html>

<head>
</head>
<body>
<from action="" method="dashboard.php">
username:<input type="text" name="username"><br>
password:<input type="password" name="password"><br>
 <input type="submit" name="submit" value="Login">
</from>
</body>
</html>