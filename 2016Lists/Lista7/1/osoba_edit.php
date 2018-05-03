<?php
	include "baza.php";
	$id=intval($_GET['id']);
	$wynik=$baza->query("select * from osoby where id='$id'");
    $r=$wynik->fetch_assoc();
?>
<form method='post' action='osoba_zmiana.php'>
	<h2>Edycja osoby</h2>

	<input name='id' type=hidden value='<?=htmlentities($r['id'])?>' class="form-control">
	<input name='imie' placeholder='Imię' value='<?=htmlentities($r['imie'])?>' class="form-control">
	<input name='nazwisko' placeholder='Nazwisko'  value='<?=htmlentities($r['nazwisko'])?>' class="form-control">

	<select name='plec' placeholder='Płeć' class="form-control">
		<option value=''>Płeć:</option>
		<option value='m' <?php if($r['plec']=='m') echo 'selected' ;?>>Mężczyzna</option>
		<option value='k' <?php if($r['plec']=='k') echo 'selected' ;?>>Kobieta</option>
	</select>

	<textarea name='opis' placeholder='Opis' class="form-control"><?=htmlentities($r['opis'])?></textarea>

	<button class='btn btn-primary' type="submit" name="co" value="Zapisz">Update</button>
	<button class='btn btn-primary' type="submit" name="co" value="Usun">Delete</button>
	<button class='btn btn-primary' type="submit" name="co" value="Anuluj">Cancel</button>
</form>
