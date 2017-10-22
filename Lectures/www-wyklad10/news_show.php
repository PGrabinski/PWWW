<style>
.autor {float:right}
.news {margin-bottom:30px}
</style>
<?php
include_once "baza.php";

if( $id=intval($_GET['id']) )
    $where = " id='$id' ";
else
if( $main=intval($_GET['main']) )
    $where = " main='1' ";
else $where = " true order by id desc limit 3 ";

//Pobierz dane artykułu o podanym id
$results = $db->query("SELECT * FROM news where $where");

while($row = $results->fetchArray()) 
{
   if($res=$db->query("SELECT * FROM user WHERE id='$row[autor]'")) 
       $a= $res->fetchArray(); // Znajdż dane autora

    echo "<div class='news' id='news$row[id]'>";//utwórz ramkę artykułu
    
    if($me and ($me==$row['autor'] or $_SESSION['rola']>1)) //link do edycji
        echo "<a href='#news_edit.php?id=$row[id]' style='float:right'>Edit</a>";
        
    echo "<h3 class='tytul'>$row[tytul] ($row[kategoria])</h3>"; // tytuł
    echo "<div class='skrot'>$row[skrot]</div>"; // streszczenie
    echo "<div class='tekst'>$row[tekst]</div>"; // treść
    
    echo "<div class='autor'>$a[imie] $a[nazwisko] ";// autor i
    echo          "<i>$row[aktualizacja]</i></div>";// data aktualizacji
    echo "</div>";// Zamknij ramkę

}
