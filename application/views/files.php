<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>Uploads</h2>
<form method="POST" action="<?=base_url('file/download_zip')?>">
	<table>
	<tr>
		<th>Zip</th>
		<th>Filename</th>
	</tr>
	<?php foreach($files as $file):?>
	<tr>
		<td align="center"><input type="checkbox" name="zipfiles[]" value="<?=$file?>"></td>
		<td><a href="<?=base_url('uploads/'.$file)?>" download=""><?=$file?></a></td>
	</tr>
	<?php endforeach; ?>

	</table>
	<div style="margin-top:10px;text-align:center;">
		<input type="submit" style="padding:10px;" value="Download Zip">
	</div>
</form>


</body>
</html>
