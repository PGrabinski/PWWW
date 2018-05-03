<?php
    $host = 'sql.pgrabinski.nazwa.pl';
    $user = 'pgrabinski_osoby';
    $password = 'PWWWosoby1';
    $db = 'pgrabinski_osoby';
    $baza=new mysqli($host, $user, $password, $db);
    if ($baza->connect_error) {
        die("Connection failed: " . $baza->connect_error);
    }
    // if ($baza->query("insert into osoby(imie,nazwisko,plec,opis)
		// 									values('Paweł', 'Grabiński', 'm', 'aaaa')") ===true) {
    //     echo 'Person added!';
    // } else {
    //     echo $baza->error;
    // }
		// if($baza->query("SELECT * FROM osoby") === TRUE){
		// 	echo "Can read!";
		// } else {
		//   $result = $baza->query("SELECT * FROM osoby");
		// 	$finResult = $result -> fetch_assoc();
		// 	echo $finResult;
		// 	echo 'Sth is wrong!';
		// }
	$sql ="create table if not exists osoby
		(id integer primary key auto_increment,
		 imie char(20),
		nazwisko char(40),
		plec char(1),
		opis text
		)";
	if ($baza->query($sql) === TRUE) {
    // echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $baza->error;
}
// 		echo 'After query';
