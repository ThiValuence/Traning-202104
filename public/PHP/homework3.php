<form action ="homework3.php" method="get">
Enter a Number: <input type="text" name="input"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if($_GET)
{
  $input=$_GET['input'];
  for ($i = 2; $i <= $input-1; $i++) {
    if ($input % $i == 0) {
      $value= True;
	    $vanct = $input / $i;
    }
  }
if (isset($value) && $value) {
    echo 'The Number '. $input . ' is not prime';
   {
   	echo " because it can devisible " . " $vanct ";
   }
}  else {
    echo 'The Number '. $input . ' is prime ';
   }
}
?>