<?php

if ($_POST) {
    include "baza.php";
    echo '<script type="text/javascript">
           console.log("In POST");
      </script>';
    foreach ($_POST as $x=>$y) {
        $r[$x]=mysqli_real_escape_string($baza, $y);
    }
    switch ($_POST['co']) {
        case 'Usun':
            $baza->query("delete from videos where id='$r[id]'");
            break;
        case 'Zapisz':
            $baza->query("update videos
						 set name='$r[name]',
						 url='$r[url]',
						 comments='$r[comments]'
						 where id='$r[id]'");
        break;
        case 'Dodaj':
            if($baza->query("INSERT INTO videos(name,url,comments)
                          values('$r[name]', '$r[url]', '$r[comments]')") === TRUE){
                            // echo '<script type="text/javascript">
                            //        console.log("Insert works");
                              // </script>';
                          } else {
                            // echo '<script type="text/javascript">
                            //        console.log("INSERT not working");
                                  //  </script>';
                          }
            break;

    }
		echo '<script type="text/javascript">
           window.location = "/PWWW/Lista7/4/index.php"
      </script>';
}
