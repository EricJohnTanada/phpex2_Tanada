<!DOCTYPE html>
<html>
<head></head>
<body>
   <?php 
      include ("Functions.php");
      $functions = new Functions;

      echo "<br>".$functions -> findMaxRange($_GET['first'],$_GET['second']);
      echo "<p>----------------------------------------------------------------------</p>";
      echo "<br>" . $functions -> countOnes($_GET['integer']);
      echo "<p>----------------------------------------------------------------------</p>";
      echo "<br>" . $functions -> twoParts($_GET['path1'],$_GET['path2']);
      echo "<p>----------------------------------------------------------------------</p>";
      echo "<br>" . $functions -> isSastryNumber($_GET['test']);
   ?>