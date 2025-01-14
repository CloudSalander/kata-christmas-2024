<?php
define("LEAF","*");
define("BLANK_LEAF"," ");
define("TRUNK","|||");

$treeHeight = intval(readline());
$treeLength = $treeHeight*2-1;

printLeafsRow($treeLength);
//printTrunk($treeLength);

function printLeafsRow(int $rowLength): void {
    echo str_repeat(LEAF,$rowLength);
}


?>