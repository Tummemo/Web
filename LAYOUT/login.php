<?php 
include("JS/script.php");
function pageLogin() { ?>
<center> 
<form action="" method="POST">
    <table>
        <tr><td><label>Username</label></td><td><input type="text" name="user"></td></tr>
        <tr><td><label>Password</label></td><td><input type="password" name="pwd"></td></tr> 
        <tr><td><label>
        <select name="level">
        <option name="none">
Level
</option><option name="student">Student</option>
</option name="teacher">Teacher</option>
        </select>
         </label></td>

         <td><input type="submit" onclick="hello();" name="submit" value="Login"></td></tr>
    </table>
    
    
    
</form>
</center>

<?php } ?>
