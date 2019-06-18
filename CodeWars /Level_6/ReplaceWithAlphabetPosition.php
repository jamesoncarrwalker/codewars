<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 18/06/2019
 * Time: 12:31
 *
 *
 * ***************** THE CHALLENGE ***************
 * LEVEL  6 KYU
 *
 * Welcome.

In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.

Example

alphabet_position('The sunset sets at twelve o\' clock.');
Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" (as a string)

 */

function alphabet_position(string $s): string {
    $alph = range('A','Z');
    $string = str_split(strtoupper($s));
    $return = [];

    foreach($string as $key => $val) {
        if(!in_array($val,$alph)) continue;
        $return[] = array_search($val,$alph)+1;
    }

    return implode(' ',$return);

}