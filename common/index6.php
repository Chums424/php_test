<?php

/* 配列・・・数字（順番固定）と値がセット
数字によって場所を特定　*/

// 配列1行
$array = [1,2,3,'aaa'];

// プログラムは０から始まる
echo $array[1];

/*　まとめて中身を見る時はvar_dump
preで囲むと縦に並んで見やすくなる*/
echo '<pre>';
var_dump($array);
echo '<pre>';

// 配列2行
$array_2 = [
  ["赤",'青','黄'],
  ['緑','紫','黒']
];

echo '<pre>';
var_dump($array_2);
echo '<pre>';

// 紫をだすには
echo $array_2 [1][1];

?>