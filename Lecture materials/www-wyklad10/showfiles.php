<?php
header("Content-Type: text/html; charset=utf-8");
error_reporting(0);
$files=split("\n",`ls *.php *.js *.css`);
foreach( $files as $file)
if($file && $file!="baza.php" && $file!="auth.php")
{  $file1=urlencode($file);
  echo "<a href=?f=$file1> $file </a> &nbsp; - &nbsp; ";
}


foreach($files as $file)
if($file && $file!="baza.php" && $file!="auth.php" &&$file==$_GET['f'])
{  
  echo "<H4><a href=$file> File: $file </a></H4>";
  highlight_file($file);
}


?>