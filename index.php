<?php
$str = 'Me, as a snipers';

// i for insensitive
$caseInSensitive = '/s/i';

// m for multiple search
$multipleSearch = '/^me/mi';

// find one or many in []
$abc = '/[abc]/';

// not in [^]
$notabc = '/[^abc]/';

//find between char [a-z]
$betweenaz = '/[a-z]/';

//find between char with case [a-zA-Z]
$betweenazAZ = '/[a-z]/';

//find between numbers [0-9]
$betweennum = '/[0-9]/';

//fnd match patter |
$matchPattern = '/me|as/i';

//find any patter
$anypattern = '/./';

//beginning of a string
$beginning = '/^me/i';

//end of a string
$ending = '/snipers$/i';

//find any digit \d
$digit = '/\d/';

//find any non-digit /D
$nondigit = '/\D/';

//find whitespace \s
$whitespace = '/\s/';

//find non-whitespace \S
$nonwhitespace = '/\S/';

// find any digit or aplabetic \w
$digitalpha = '/\w/';

// find anu non digit or non alpha
$nondigitalpha = '/\W/';

//starts with pattern /\b/
$b = '/\bme/i';

echo preg_match_all($caseInSensitive, $str) . "<br>";
echo preg_match_all($multipleSearch, $str) . "<br>";
echo preg_match_all($abc, $str) . "<br>";
echo preg_match_all($notabc, $str) . "<br>";
echo preg_match_all($betweenaz, $str) . "<br>";
echo preg_match_all($betweenazAZ, $str) . "<br>";
echo preg_match_all($betweennum, 6) . "<br>";
echo preg_match_all($matchPattern, $str) . "<br>";
echo preg_match_all($anypattern, $str) . "<br>";
echo preg_match_all($beginning, $str) . "<br>";
echo preg_match_all($ending, $str) . "<br>";
echo preg_match_all($digit, 1) . "<br>";
echo preg_match_all($nondigit, $str) . "<br>";
echo preg_match_all($whitespace, $str) . "<br>";
echo preg_match_all($nonwhitespace, $str) . "<br>";
echo preg_match_all($digitalpha, $str) . "<br>";
echo preg_match_all($nondigitalpha, $str) . "<br>";
echo preg_match_all($b, $str) . "<br>";
