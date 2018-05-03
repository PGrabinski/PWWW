<?php

include_once "baza.php";

$where = " ((pokaz) or (('$me'<>'' and autor='$me') or ('$_SESSION[rola]'>'1'))) ";

if($main=intval($_GET['main']))
    $where.=" and main ";

if($id=intval($_GET['id']))
    $where.=" and id='$id' ";

if($autor=intval($_GET['autor']))
    $where.=" and autor='$autor' ";

if($kat=SQLite3::escapeString($_GET['kat']))
    $where.=" and kategoria='$kat' ";

if($ile=intval($_GET['ile']))
    $limit=" LIMIT $ile ";

$results = $db->query("SELECT *
                       FROM news
                       WHERE $where
                       ORDER BY id desc 
		       $limit
		       ");


while ($row = $results->fetchArray()) {
echo 
"<a href='#news_show.php?id=$row[id]'>
<div class='news' id='news$row[id]'>
<h3 class='tytul'>$row[tytul] ($row[kategoria])</h3>
<div class='skrot'>$row[skrot]</div>
<div class='autor'> $row[autor] $row[data]</div>
</div><a/>";

}

echo "<script>$('#right').load('news_list.php?id=$id&kat=$kat&autor=$autor')</script>";

