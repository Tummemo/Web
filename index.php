<?php 
session_start();

?>
<html> <head> <title> index </title> 
<link rel="stylesheet" href="CSS/style.css">
</head> <body>
<?php
include("JS/script.php");

?>
<br><br><br><br><br><br><br><br>
<center>
    <form action="" method="post">
        <table>
            <tr>
                <td><label>User Name</label></td>
                <td><input type="text" name="username" id="usr" size="5"></td>
            </tr>
            <tr>
                <td><label>Password </label></td>
                <td><input type="password" name="password" id="pwd" size="5"></td>
            </tr>
            <tr>
                <td>
                <label>
                        <select name="level" id="lvl">
                            <option value="none">Level</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                 </label>
                 </td>
                 <td>
                     <input type="submit" onclick="subit();" name="submit" value="Confirm" size="10" >
                 </td> 
            </tr>
        </table>
    </form>
<?php

    if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];
    
    
    echo "<br><h1>Your Login Data </h1><br>";
    echo "<table><tr><th>User Name</th><th>Password</th><th>Level</th><th>File name </th></tr><tr> <td>".$username."</td><td>".$password."</td> <td>".$level."</td><td>".$level."</tr></table>
    ";
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $_SESSION["level"] = $level;
    
   
}
?>


</body>
</html>
