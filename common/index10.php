<?php

$height = 91;

/* ブロックコメント（複数行コメントアウト）の方法
「Shift+Alt+a」（Macでは「Shift+Option+a」）という操作で利用できる*/

/* if ($height >= 91){
  echo '身長は' . $height . 'cmです';
}

if ($height <= 90){
  echo '身長は' . $height . 'cmになります';
} */

if ($height !== 90){
  echo '身長は90cmではありません';
}

/* != または　!==　があるが
!==　は型が同じかどうかという判定もあわせて行ってくれるので
基本的には　!== を使うようにする
*/

echo '<br>';

/* データが入っているかどうかの判定は
isset, empty, is_null
などの書き方がある
*/

$test = '';

if(empty($test)){
  echo '変数は空です';
}

$test_2 = '1';

if(!empty($test_2)){
  //否定の！を使うとelseを使わずにシンプルに書ける
  echo '変数は空ではありません';
}


// AND と OR

$signal_1 = 'red';
$signal_2 = 'blue';

if($signal_1 === 'red' && $signal_2 === 'blue'){
  echo '赤と青です';
}

/* ANDは　and　という書き方もあるが、&&を使うことが多い
ORは　or または　|| 　
※「Shift + ¥」で ||
*/

echo '<br>';

$signal_3 = 'red';
$signal_4 = 'yellow';

if($signal_3 === 'red' || $signal_4 === 'blue'){
  echo '赤です';
}

/* 三項演算子
if else と似たような動きになる
　条件　? 真　: 偽
*/

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';
echo $comment;

/* 三項演算子は一行で書けるというメリットがある
簡単な判定の時に使える
*/

?>