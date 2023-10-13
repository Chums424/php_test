<?php

// for, while は繰り返しをする

// for (条件３つ)

// 0から10より少ない間はechoを繰り返す、一つずつ増える
for($i = 0; $i < 10; $i++ ){
  // $i++ はインクリメントと言い、iを一つずつ増やす
  echo $i;
}

echo '<br>';

// continue, break 

for($i = 0; $i < 10; $i++ ){

  if ($i === 5){
  break; //ループの処理を止めるという意味
  }
  echo $i;
}

echo '<br>';

for($i = 0; $i < 10; $i++ ){

  if ($i === 5){
  continue; //スキップしてループを再開するという意味
  }
  echo $i;
}

/* continue, breakはループが読みづらくなるので
できるだけ使わないように */

echo '<br>';

//while 

$j = 0;
while($j <5){
  echo $j;
  $j++;
}

/* whileとforの違い
for文は初期値と繰り返す数があらかじめ決まっている
繰り返す数が決まっている時　→for
繰り返す数が決まっていない時　→while

※forで統一というルールがある会社もある
*/

echo '<br>';

do{echo $j;}
while($j < 5);
/* do～whileは条件を満たす間、繰り返し処理を行う
ほとんど使われない */

?>