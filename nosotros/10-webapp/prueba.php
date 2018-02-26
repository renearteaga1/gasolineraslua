<?php 

/*if (isset($_POST['submit'])) {

echo $_POST['h'];
echo $_POST['check'];



 
}*/
//echo $i;

$martescheck = $_POST['martescheck'];
echo $martescheck;
 
?>

<html>

<body>
<form method='post'>
<input type='text' id='h' name='h'>

<input type='checkbox' name='check' id='check' value='1'>
<input type='submit' name='submit' id='submit'>
</form>



</body>

</html>