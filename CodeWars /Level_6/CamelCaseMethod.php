<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 18/06/2019
 * Time: 12:42
 *
 * **** THE CHALLENGE *****
 * LEVEL 6 KYU
 *
 *Write simple .camelCase method (camel_case function in PHP, CamelCase in C# or camelCase in Java) for strings. All words must have their first letter capitalized without spaces.

For instance:

camel_case("hello case"); // => "HelloCase"
camel_case("camel case word"); // => "CamelCaseWord"
Don't forget to rate this kata! Thanks :)
 */



function camel_case(string $s): string {
    $s = explode(' ',$s);
    $ret = '';
    foreach($s as $r) {
        $ret .= ucfirst($r);
    }

    return $ret;
}