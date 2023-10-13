<?php

/* switch文はif文に近い性質をもつ
if文の方が見やすく好ましいので、
できるだけswitchの使用は避ける
*/

$data = 1;

switch ($data){
  case 1:
    echo '1です';
    break;
    //breakを入れないと、1の後にそのまま２の処理が走ってしまうという問題がある
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '1~3ではありません' ;
}

/* 
==
=== 型も等しい
switchの場合は ==が走ってしまう　*/

$data_2 = '1';

switch ($data_2){
  case $data_2 === 1:
    echo '1です';
    break;
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '1~3ではありません' ;
}

// if文で書くとよりシンプルになる

$data_3 = 1;

if ($data_3 === 1){
  echo '1';
}
if ($data_3 === 2){
  echo '2';
}
if ($data_3 === 3){
  echo '3';
}

?>