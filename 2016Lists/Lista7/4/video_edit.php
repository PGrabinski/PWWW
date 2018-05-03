<?php
	include "baza.php";
	$id=intval($_GET['id']);
	$wynik=$baza->query("select * from videos where id='$id'");
    $r=$wynik->fetch_assoc();
?>
<form method='post' action='video_query.php'>
	<h2>Edit the video</h2>

	<input name='id' type=hidden value='<?=htmlentities($r['id'])?>' class="form-control">

	<input name='name' placeholder='Name of the video' value='<?=htmlentities($r['name'])?>' class="form-control">

	<textarea name='url' class="form-control"><?=htmlentities($r['url'])?></textarea>

	<textarea name='comments' class="form-control"><?=htmlentities($r['comments'])?></textarea>

	<button class='btn btn-primary' type="submit" name="co" value="Zapisz">Update</button>
	<button class='btn btn-primary' type="submit" name="co" value="Usun">Delete</button>
	<button class='btn btn-primary' type="submit" name="co" value="Anuluj">Cancel</button>
</form>
