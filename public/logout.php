<?php 
 
if(isset($_GET['logout']))
{
    session_destroy();
    header('location:login.php?logout=true');
    exit;
}

echo "This is logout screen";
?>