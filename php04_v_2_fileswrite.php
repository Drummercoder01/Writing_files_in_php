<?php
$_output="";
// text wegschrijven
$_pointer = fopen('test2.txt','wb')
	or die("file kan niet geopend worden");

// tekst weg-schrijven
fwrite($_pointer, 'Dit is de inhoud van test2.txt');
fclose($_pointer);

//text uit-lezen
$_pointer= fopen('test2.txt','rb')or die ("file kan niet geopend worden");

$_output= fread($_pointer, 255);
fclose($_pointer);

echo $_output;

?>