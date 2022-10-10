<?php
session_start();
if(isset($_POST["submit"])){
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["level"] = $_POST["level"];
$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];
    
    $file = file_get_contents("JS/DB_JSON/Database/user.json");
    $code = json_decode($file);
    $qty = count($code);
    $qty_arr = $qty - 1;
    
for($i = 0 ; $i <= $qty_arr ; $i++){
    
    if($username == $code[$i]->username && $password == $code[$i]->password && $level == $code[$i]->level){
        
        if($level == "teacher"){
            header("location:JS/DB_JSON/teacher.php");
        }//teach
        elseif($level == "student"){
            header("location:/JS/DB_JSON/student.php");
        }//stu
        elseif($level == "admin"){
            header("location:JS/DB_JSON/admin.php");
            
        }
        break;
    }//if_login_check 
    else{
        //echo $username ."<br>";
        //echo $code[$i]->username;
        header("location:sorry.php");
        //echo "Level : " .$level."<br>";
        //echo "Username : ".$username."<br>";
        //echo "Password :".$password."<br>";
    }
    
}//for_$qty_arr
}//isset_submit
?>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php
require("JS/script.php");
?>
<center>
    <br><br><br>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username </td>
                <td><input type="text" name="username" id="username" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><select name="level" id="level">
                <option value="none">Level</option>
                <option value="student">Student</option><option value="teacher">Teacher</option><option value="admin">Admin</option>
                </select></td>
                <td><input type="submit" onclick="login();" name="submit" id="submit"></td>
            </tr>
        </table> 
    </form>
    <br>
    
    
</body> 
