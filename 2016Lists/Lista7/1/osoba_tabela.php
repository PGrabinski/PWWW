<?php
include "baza.php";


$wynik=$baza->query("SELECT * FROM osoby");

echo "<table class='table'>";
echo "<h2>People list</h2>";
echo "<tr><th>Id<th>Imię</th><th>Nazwisko</th><th>Płeć</th><th>Opis</th>";
while($r= $wynik->fetch_assoc())
{
	echo "<tr onclick=\"location='?id=$r[id]'\">
			<td>$r[id]</td>
			<td>$r[imie]</td>
			<td>$r[nazwisko]</td>
			<td>$r[plec]</td>
			<td>$r[opis]</td></tr>";
}

echo "</table>";
	echo "<button class='btn btn-primary' onclick=\"location='?id=dodaj'\">Dodaj nową osobę</button>";
