<?php

$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str );
$str_camel = ucwords ($str);
$str_ucfirst = ucfirst ($str);
$str_sentence = ucfirst (strtolower($str));

echo '<p>' .$str. '</p>';
echo '<br> Output: </br>';
echo '<p>' .$str_lower.'</p>';
echo '<p>' .$str_camel.'</p>';
echo '<p>' .$str_ucfirst.'</p>';
echo '<p>' .$str_sentence.'</p>';

?>