<?php
include("JS/script.php");
function pageHeader($title,$nav){

?>

<html>
<head><title><?php $title ?></title>
<link rel="stylesheet" href="CSS/style.css">
</head><body>

<nav> <h1><?php $nav ?></h1> </nav>
<?php
} function pageFooter(){ 
?>
</body>
</html>
<?php
}
?>
