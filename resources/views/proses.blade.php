<html>
<title>PakarSindroma|DS</title>
<body>
<table width="750" border="1" align="center">
  <tr>
    <td width="786"><h3>PROSES DIAGNOSA PENYAKIT GIGI</h3><strong>Pilihlah Gejala Yang Anda Alami..!</strong></td>
  </tr>
  <tr>
    <td>
<form method="post">
<?php
//-- menampilkan daftar gejala
$arrKDGejala=array();
$sql="SELECT * FROM evidence  ";
$result=$db->query($sql);
while($row=$result->fetch_object()){
	echo "<input type='checkbox' name='evidence[]' value='{$row->id}'> {$row->code} | {$row->name}<br>";
	$arrCode[]=$row->name;
}
?><br>
<center><input type="submit" value="Proses Diagnosa Penyakit"></center>
</form>

</body>
</html>