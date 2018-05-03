<?php
session_start();
session_unset();
$_SESSION['me']='';
$_SESSION['rola']=0;
echo "<script>window.location = 'index.php'</script>";
?>
