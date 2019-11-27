<?php
$mystring = 's';
$input   = $argv[1];
$pos = strpos($input, $mystring); //input + s

$getal = '';

if ($pos === false) {
 echo "Er is geen tijd gevonden.";
}else
{
for ($i=0; $i < strlen($input) - 1; $i++)
{ 
    $getal = $getal . $input[$i];
}

echo $getal . " Seconden";

}
?>