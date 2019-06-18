<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 18/06/2019
 * Time: 12:40
 *
 * ******* THE CHALLENGE *********
 *
 * LEVEL 8 KYU

Make a simple function called greet that returns the most-famous "hello world!".

Style Points

Sure, this is about as easy as it gets. But how clever can you be to create the most creative hello world you can think of? What is a "hello world" solution you would want to show your friends?
 */

//obviously could have just done return 'hello world' but going for fun points


function greet(){
    $goal = 'hello world!';//the main goal
    $return = '';//the string to return
    $remainingSearch = $goal;
    while(true) {
        //generate a random character
        $char = randomString('abcdefghijklmnopqrstuvwzyz!@£$%^&*()1234567890 ');
        //see if it's the next character we need
        $subGoal = substr($remainingSearch,0,1);
        //have we found the character we need?
        if($char == $subGoal) {
            //add it to the string
            $return .= $char;
            //have we created the string we want?
            if($return == $goal)break;
            //if the string isn't finished yet strip off the character we found
            $remainingSearch = substr($remainingSearch,1);
        }
    }
    return $return;
}


function randomString($chars) {
    //creat a random string
    $string = '';
    for($i = 0; $i<10;$i++){$string .= str_shuffle(str_repeat($chars,5));}
    return substr($string,0,1);
}