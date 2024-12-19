<?php
define("LEAF","*");
define("TRUNK","|||");
//TODO: Input validation could be great. Is a number, is positive?
$height = intval(readline());
$con = 0;
$n_leafs = 1;
$tree_length = 1 + (2*$height);

while($con < $height) {
    printLeafsRow($n_leafs,$tree_length);
    echo PHP_EOL;
    ++$con;
    $n_leafs += 2;
}
printTrunk($n_leafs);

function printLeafsRow(int $n_leafs, int $tree_length): void {
    $con = 0;
    while($con < 1) {
        echo " ".LEAF." ";
        ++$con;
    }
}

function printTrunk(int $tree_length): void {
    echo TRUNK;
}

?>