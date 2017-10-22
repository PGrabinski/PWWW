<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chat</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link src='style.css' rel='stylesheet'>
    </head>
    <style>
        * {font-family:'Arial';}
        #all {width:100%;border:1px solid grey;border-collapse:collapse}
        #all td  {border:1px solid grey;vertical-align:top;text-align:center;position:relative}
        #left, #center,#right {height:500px;overflows-y:scroll;padding:10px}
        #all td#right,#all td#left {text-align:left}
        #top, #bottom {height:100px}
        #left,#right {width:20%}
        .news {clear:both;border:1px solid grey}
    </style>
<body>

<table id=all>
<tr><td colspan=3 id='top'>
<h1>Nasz wspaniały nowy Chat</h1>
<div id='menu'></div>
</td></tr>
<tr>
<td id='left'></td>
<td id='center'></td>
<td id='right'></td>
</tr>
<tr><td id='bottom' colspan=3>
</td></tr>
</table>
</body>

<script> 
$(window).on("hashchange",function(){
	$("#center").load(location.hash.substr(1));
    });

$("#menu").load("menu.php");
$("#left").load("user_list.php");
$("#center").load(location.hash?location.hash.substr(1):"news_show.php?main=1");
$("#right").load("news_list.php");
$("#bottom").load("footer.php");
</script>
</html>

