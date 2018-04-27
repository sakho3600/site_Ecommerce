<?php
session_start();
if(!isset($_SESSION['authentifie'])) 
{
	header('Location: compte.php');
}
?>
	<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body>
<?php
     include 'header.php'; 
      include 'nav.php';
      include 'content_administration.php';
      include 'footer.php';
?>

</body>
</html>

