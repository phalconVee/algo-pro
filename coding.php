<?php

/** @var Array Walk:
 * Return/Form new strings based on key value pairs of an array
 *  $data
 */

//$data=[
//    'Mike' => 'Teacher',
//    'Shola' => 'Founder',
//    'Olubi' => 'Fag'
//];
//
//array_walk($data, function ($value, $key) {
//    echo "$key is a $value. \n";
//});


/** @var Array Map:
 * Return new array after performing some operations (mathematical mostly)
 * $data
 */

//$data = [10, 20, 30];
//
//$new_data = array_map(function ($value) {
//    return $value*4;
//}, $data);
//
//print_r($new_data);

/** @var Array Filter:
 * Return new array based on some conditions
 * $data
 */

//$data=[10,20,30];
//
//$new_data = array_filter($data, function($value) {
//    return $value>10;
//});
//
//print_r($new_data);

/** @var Array Reduce:
 * Returns a single value, usually d summation of elements(int/float) in an array
 * $data
 */

//$data = [10, 20, 30];
//
//$new_data = array_reduce($data, function($a, $b) {
//    if($b>10)
//        return $a += $b;
//    return $a;
//}, 0);
//
//print_r($new_data);


//$data = [
//    'a' => 10,
//    'b' => 20,
//    'c' => 30,
//    'd' => NULL
//];
//
//$verdict = array_key_exists('a', $data) ? $data['a'] : 'not found';
//
//print_r($verdict);


$dump = [];
$length=8;
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
for ( $i = 0; $i < $length; $i++ ) {
    $password = substr( $chars, rand( 0, strlen( $chars ) - 1 ), $length );

    $dump[] = $password;
}

var_dump($dump);
//
//function random_num($length) {
//    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//    $password='';
//    for ( $i = 0; $i < $length; $i++ ) {
//        $password = substr( $chars, rand( 0, strlen( $chars ) - 1 ), $length );
//    }
//
//    echo $password;
//}
//
//
//random_num(8);

#new feature


