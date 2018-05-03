<h2>Dodawanie osoby</h2>
<form method='post' action='osoba_zmiana.php'>
	<input name='id' type='hidden' class="form-control">
	<input name='imie' placeholder='First Name' class="form-control">
	<input name='nazwisko' placeholder='Last Name' class="form-control">

	<select name='plec' placeholder='Płeć' class="form-control">
		<option value=''>Płeć:</option>
		<option value='m'>Mężczyzna</option>
		<option value='k'>Kobieta</option>
	</select>

	<textarea name='opis' placeholder='Opis' class="form-control"></textarea>
	<button class='btn btn-primary' type="submit" name="co" value="Dodaj">Add</button>
	<button class='btn btn-primary' type="submit" name="co" value="Anuluj">Cancel</button>
</form>
