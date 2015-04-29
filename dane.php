<?php
if (isset($_POST['submit'])) {
if(strlen($_POST['username'])==0)
{
echo"<div><center><font color = red><b>Nie wprowadzono loginu</font></center><div>";
}
if (strlen($_POST['username'])>0){
$tekst = $_POST['username'];

echo"Twój login to: <br>$tekst</br>";
  }
}
?>