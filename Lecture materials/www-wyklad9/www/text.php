<?php

$chat=file_get_contents('chat.txt');

if($_POST)
{
    $nick=htmlentities($_POST['nick']); 
    $text=htmlentities($_POST['text']);
    if($text)
    {    
	$chat="<li><b>$nick:</b> $text</li>\n".$chat;
	file_put_contents('chat.txt',$chat);
    }
}

echo $chat;
