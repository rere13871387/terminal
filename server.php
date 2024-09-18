<?php
//import functions, libraries and db connec
require_once 'function.php';
require_once 'db.php';
//get value
$q = $_REQUEST["item1"];
//split words
$arr = explode(' ', trim($q));
//clear command
if ($q == 'clear') {
    echo '';
    //random pass
} elseif ($q == 'generate pass') {
    echo password();
    //date
} else if ($q == 'date') {
    echo date("Y/m/d l");
    //random number
} else if ($arr[0] == 'rand') {
    $min = $arr[2];
    $max = $arr[4];
    echo rand($min, $max);
} else if ($arr[0] == 'fantoa') {
    //persian number to alphabet
    echo fanumtoalph($arr[1]);
    //english number to alphabet
} else if ($arr[0] == 'entoa') {
    echo enumtoalph($arr[1]);
    //persian alphaber to number
} else if ($arr[0] == 'faltonu') {
    echo faaltonu($arr[1]);
    //english alphabet to number
} else if ($arr[0] == 'enaltonu') {
    echo enaltonum($arr[1]);
    // echos information
} else if ($q == 'help') {
    echo '<p class="green">commands:
clear: clears the result.
<br>
generate pass: generates strong random password.
<br>
date: shows date.
<br>
rand f (firs number) to (second number): returns a custom random number.
<br>
fantoa (number): changes number to alphabet (persian).
<br>
entoa (number): changes number to alphabet (english).
<br>
faltonu (alphabet): changes alphabet to number (persian)
<br>
enaltonu (alphabet): changes alphabet to number (english)
typsend =>: types text.
<br>
brd (txt): report bugs.
</p>

'; //if null
} else if ($q == '' || $q == null) {
    echo "please type something.";
    // echo command
} else if ($arr[0] == 'typsend' && $arr[1] == '=>') {
    $sendtxt =  str_replace('typsend =>', '', $q);
    if ($q == "typsend => are you seeing me?") {
        echo 'why are you asking this?';
    } else {
        echo $sendtxt;
    }
} else if ($arr[0] == 'brd') {
    $report = str_replace('brd', '', $q);
    $sql = "INSERT INTO `bugs` (report) VALUES('$report')";
    mysqli_query($con, $sql);
    echo 'report successfully sent';
} else if ($arr[0] == 'adminls') {
    if ($arr[1] == "rkmrreza1387") {
        $sqladmin = "SELECT * FROM `bugs` WHERE 1";
        $result = mysqli_query($con, $sqladmin);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $rep = $row['report'];
            echo '<br>';
            echo $id . '-' . $rep . "<br>";
        }
    } else {
        echo 'wrong password';
    }
} else if ($arr[0] == 'calc') {
    $caltxt =  str_replace('calc', '', $q);
    eval('$result = (' . $caltxt . ');');
    echo $result;
} else if ($arr[0] == 'average') {
    $numarr =  count($arr) - 1;
    $cuttxt =  str_replace('average', '', $q);
    $arraverage = explode(' ', trim($cuttxt));
    echo array_sum($arraverage) / $numarr;
} else if ($arr[0] == 'findini') {
    require_once('simple_html_dom.php');
    $html = file_get_html($arr[1]);
    // find all link
    foreach ($html->find('a') as $e) {
        echo $e->href . '<br>';
    }
} else {
    echo "'" . $q . "'" . ' "command not found" error. type help to see list of commands';
}
