<?php

/* プログラムが得意なもの
条件分岐（信号機など）と繰り返し

If（elseはできるだけ使わない）
foreach (配列の抽出)
for
switch
while
do-while
*/

/* if (条件)｛
　条件が真なら実行
｝
*/

$height = 90;

if ($height == 90){
  echo '身長は' . $height . 'cmです';
}

echo ('<br>');

// ==　一致すれば
// ===　型も一致　

$height = '90'; //文字

var_dump($height);

if ($height === 90){//条件は数字
  echo '身長は' . $height . 'cmです';
}
/* ===をつけると、文字と数字が区別され、
echoは表示されない*/

echo '<br>';

/* if (条件)｛
　条件が真なら実行
｝else{
  条件が偽なら実行
}
*/

$height = 90;

if ($height === 91){
  echo '身長は' . $height . 'cmです';
}else{
  echo '身長は' . $height . 'cmではありません';
}

echo '<br>';

$signal = 'blue';

if($signal === 'red'){
  echo 'とまれ';
} else if ($signal === 'yellow'){
  echo '一旦停止';
} else{
  echo '進む';
}

echo '<br>';

$speed = 80;

if ($signal === 'blue'){
  if ($speed >= 80){ 
    // if文の中にif文を入れることをネストと呼ぶ
    echo 'スピード違反';
  }
}

echo '<br>';

/* if文の中にif文を入れたり、else ifやelseを使うと
どんどん読みづらくなるので
elseはできるだけ使わず
if文単体でおわるように書く
*/

$height = 90;

if ($height >= 91){
  echo '身長は' . $height . 'cmです';
}

if ($height <= 90){
  echo '身長は' . $height . 'cmになります';
}

?>