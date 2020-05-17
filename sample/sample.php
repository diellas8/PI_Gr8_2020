<?php
//funksioni open
$fp = fopen("sample.txt", "w");

//funksioni write
fwrite($fp, 'Programimi Ne Internet!');


//funksioni read
readfile('sample.txt');  //  Programimi Ne Internet!

?>