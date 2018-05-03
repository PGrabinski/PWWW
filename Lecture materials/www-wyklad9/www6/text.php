<?php
error_reporting(0);

$db = new SQLite3('chat.db');

$last=intval($_GET['last']);
$newlast=0;
$room=intval($_GET['room']);

if($_POST)
{
    $nick=htmlentities($_POST['nick']);
    $text=htmlentities($_POST['text']);
    if($text)
    {    
     $db->query("create table if not exists wpis$room
		(id integer primary key autoincrement,
		date date,
		nick char(20),
		text text)");

    $db->query("insert into wpis$room (date,nick,text) values(datetime(),'$nick','$text')");

    if($nick=='Noe' and $text=='Potop')
    {
      $db->query("delete from wpis$room");
      echo "<script>$('#chat').html('');</script>";
    }
    }
}

$results = $db->query("SELECT id,date,nick,text 
                       FROM wpis$room 
                       where id>$last
                       order by id desc");

while ($row = $results->fetchArray()) {
    $newlast or     $newlast=$row[0];
    echo "<li><b>$row[2]:</b>  $row[3]</li>";
}
if($newlast>$last)
   echo "<script>last=$newlast</script>";
