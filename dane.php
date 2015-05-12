<?php
if (isset($_POST['submit'])) {
if(strlen($_POST['username'])==0)
{
echo"<div><center><font color = red><b>Nie wprowadzono loginu</font></center><div>";
}
if (strlen($_POST['username'])>0){
$tekst = $_POST['username'];

$sUrl	= "http://people.ign.com/$tekst/games";
$sSearch = 'var pageOwnerId = ';
 
$string = file_get_contents( $sUrl );

if ( strPos( $string, $sSearch ) !== false )
{
	print "Znaleziono: $string";
}

else
{
	print 'Brak danych';
}
}
}
?>
