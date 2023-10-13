<?php

// 組み込み関数

/* PHPはマニュアルが充実しているので、
マニュアルをみながら書いていく

関数リファレンス
https://www.php.net/manual/ja/funcref.php
*/



//文字列関数　strlen, mb_strlen, str_replace


/* １．文字列の長さ strlen
strlen ←　string + length
*/

$text ='abc';
echo strlen ($text);
// abc の3文字なので、3が表示される

echo '<br>';

$text_2 ='あいうえお';
echo strlen ($text_2);
/* 5が表示されると思いきや、15が表示される
これはマルチバイトと関連し、
日本語の場合、文字コードが大きく2つある
SJIS, UTF-8　※UTF-8が主流
UTF-8の場合、1文字あたり３~６バイト
→あいうえお　は　3*5=15バイト
*/

echo '<br>';
/* 2. mb_strlen
あいうえお　を５文字としてだすには
マルチバイト(mb)のstrlenという関数を用いる 
*/

echo mb_strlen($text_2);

/* バイト数として15を表示するか、
マルチバイトとして日本語の文字数を表示するか
はケースバイケースで使い分ける*/

echo '<br>';

/* 3．文字列の置換　str_replace
検索文字列に一致したすべての文字列を置換する
*/

$str = '文字列を置換します';
echo str_replace('置換','ちかん',$str);

?>