<?php

/* 文字列関数　explpde, preg_match, substr
指定文字列で分割する関数　*/

// 1. 文字列を文字列により分割する　explode

$str_2 = '指定文字列で、分割します';

echo '<pre>';
var_dump(explode ('、', $str_2));
echo '</pre>';

//文字列をくっつける関数　implode

/* 2. 正規表現 preg_match
英語ではRegular Expression
文字かどうか、数字かどうか、郵便番号、
メールアドレスかどうか　など
*/

$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/', $str_3);

// ’文字列’が１つ含まれているので、１と表示される

echo '<br>';

/* 3. substr ← sub + string
指定文字列から文字列を取得する関数
*/

echo substr('abcde', 1);
// 1文字目を指定したとすると、bcdeと表示される

echo mb_substr('かきくけこ', 2);
// 日本語の場合は、マルチバイトの関数を使い、文字化けを避ける



/* 関数の探し方としては
マニュアルでみるのはもちろん、
「php　+ 文字列　+ やりたいこと」で検索する 
+/

?>