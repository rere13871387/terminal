<?php
//random password function
function password()
{
    $char = array('a', 'b', 'c', 'd', 'e', 'f');
    $char1 = array('g', 'h', 'i', 'j', 'k', 'l', '#', '$', '@');
    $char2 = array('m', 'n', 'o', 'p', 'q', 'r', '#', '$', '@');
    $char3 = array('s', 't', 'u', 'v', 'w', 'x', '#', '$', '@');
    $char4 = array('z', '%', '_', '/', '*', '+', '#', '$', '@');
    $pass = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass1 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass2 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass3 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass4 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass5 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass6 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $pass7 = ${'char' . rand(0, 4)}[rand(0, 8)];
    $password = $pass . $pass1 . $pass2 . $pass3 . $pass4 . $pass5 . $pass6 . $pass7;
    return $password;
}
function fanumtoalph($num)
{
    $num = intval($num);
    $allphabet = array('الف', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی');
    $num  = $num - 1;
    return $allphabet[$num];
}
function enumtoalph($num)
{
    $num = intval($num);
    $allphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $num  = $num - 1;
    return $allphabet[$num];
}
function faaltonu($letter)
{
    $allphabet = array('الف', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی');
    return array_search($letter, $allphabet) + 1;
}
function enaltonum($letter)
{
    $allphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    return array_search($letter, $allphabet) + 1;
}