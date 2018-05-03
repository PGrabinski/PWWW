<?php
//error_reporting(0);

$db = new SQLite3('chat.db');

$last=intval($_GET['last']);

$newlast=0;

if($_POST)
{
    $nick=htmlentities($_POST['nick']);
    $text=htmlentities($_POST['text']);
    if($text)
    {    
     $db->query('create table if not exists wpis
		(id integer primary key autoincrement,
		date date,
		nick char(20),
		text text)');
    $db->query("insert into wpis (date,nick,text) values(datetime(),'$nick','$text')");
//    echo $db->lastErrorMsg();
    }
}

$results = $db->query("SELECT id,date,nick,text 
                       FROM wpis 
                       where id>$last
                       order by id desc");
                       
while ($row = $results->fetchArray()) {
    if($newlast==0)
	$newlast=$row[0];
    echo "<li><b>$row[2]:</b>  $row[3]</li>";
}
if($newlast>$last)
echo "<script>last=$newlast</script>";
