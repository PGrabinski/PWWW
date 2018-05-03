<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lista 9: Ćwiczenie 3</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>
<?php
    $t = array('Pies','Kot','Mysz');

    function a($n){
        echo '<table class="table">';
        for($i=1;$i<=$n;$i++){
            echo '<tr>';
            for($j=1;$j<=$n;$j++){
                echo '<td>'.($i*$j).'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    function b($table){
        echo '<ul class="list-group">';
        $max = sizeof($table);
        for($i=0;$i<$max;$i++){
            echo '<li class="list-group-item">';
            echo $table[$i];
            echo '</li>';
        }
        echo '</ul>';
    }

    function c($table){
        echo '<table class="table table-dark">';
        $max = sizeof($table);
        for($i=0;$i<$max;$i++){
            echo '<tr><td>';
            echo $table[$i];
            echo '</td></tr>';
        }
        echo '</table>';
    }

    function d($table){
        $json = '{';
        $max = sizeof($table);
        for($i=0;$i<$max;$i++){
            $json.='"'.$table[$i].'"';
            if($i<$max-1) $json.=',';
        }
        $json.='}';
        echo $json;
    }

    function e(){
        //Fetch from db
        $baza=new SQLite3('baza.db');
        $wynik=$baza->query("select * from osoby");
        $json = '{';
        while($r= $wynik->fetchArray()){
            $json.='{"'.$r['imie'].'"'.','.'"'.$r['nazwisko'].'"},';
        }
        $json=substr($json, 0, -1);
        $json.='}';
        echo $json;
    }


    echo '<body>';

        a(5);
        echo '<hr>';
        b($t);
        echo '<hr>';
        c($t);
        echo '<hr>';
        d($t);
        echo '<hr>';
        e($t);
        
    echo '</body>';
    ?>