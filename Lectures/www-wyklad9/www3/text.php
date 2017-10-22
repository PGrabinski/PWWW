<?php

$db = new SQLite3('chat.db');

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

$results = $db->query('SELECT id,date,nick,text 
                       FROM wpis 
                       where id>0 
                       order by id desc');
while ($row = $results->fetchArray()) {
    echo "<li><b>$row[2]:</b>  $row[3]</li>\n";
}
