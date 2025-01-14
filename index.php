<?php
define("LEAF","*");
define("BLANK_LEAF"," ");
define("TRUNK","|||");
define("TRUNK_LENGTH",3);

$treeHeight = intval(readline());
$treeLength = $treeHeight*2-1;
printLeafsRow($treeLength);
printTrunk($treeLength);


function printTrunk(int $treeLength): void {
    if($treeLength == 1) echo TRUNK;
    else {
        $padding = ($treeLength-TRUNK_LENGTH)/2;
        echo str_repeat(BLANK_LEAF,$padding);
        print(TRUNK);
        echo str_repeat(BLANK_LEAF,$padding);
    }
    echo PHP_EOL;
}

function printLeafsRow(int $rowLength): void {
    echo str_repeat(LEAF,$rowLength);
    echo PHP_EOL;
}





?>