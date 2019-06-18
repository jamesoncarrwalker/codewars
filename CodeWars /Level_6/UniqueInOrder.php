<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 18/06/2019
 * Time: 12:43
 *
 *
 * ****** THE CHALLENGE
 * LEVEL 6 KYU
 *
 * Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

For example:

uniqueInOrder('AAAABBBCCDAABBB') == ['A', 'B', 'C', 'D', 'A', 'B']
uniqueInOrder('ABBCcAD')         == ['A', 'B', 'C', 'c', 'A', 'D']
uniqueInOrder([1,2,2,3,3])       == [1,2,3]
 */


function uniqueInOrder($iterable){

    if(!is_array($iterable))$iterable = str_split($iterable);
    $ret = [];
    foreach($iterable as $i) {
        if(end($ret) == $i) continue;
        $ret[] = $i;
    }
    return $ret;
}