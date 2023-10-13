<?php

/*関数・・・function (機能、働き、作用という意味もある)
関数は何らかの処理をしてくれる便利な機能

入力（インプット）　または　引数
出力（アウトプット）　または　戻り値

関数は２種類
組み込み関数・・・準備してある関数
ユーザー定義関数・・・自由に作れる関数


function test (引数){ 
  //処理
  return //戻り値;
}
//testは関数の名前

*/


// ユーザー定義関数

/* １．インプット引数　なし
　アウトプット戻り値　なし　の場合 */

function test(){
  echo 'テスト';
}
test ();

echo '<br>';

/* ２．インプット引数　あり
　アウトプット戻り値　なし　の場合　*/

// 実際に使うときは変数を用意することが多い
$comment = 'コメント２'; 
$comment3 = 'コメント３';

function getComment($string){
  echo $string;
}
getComment($comment3);

/*変数の名前（$comment）と引数の名前（$string）は違ってOK
  引数の名前（$string）と実際の処理の中で使う変数（echo $string）は同じでないとダメ*/

echo '<br>';

/* ３．インプット引数　なし
　アウトプット戻り値　あり　の場合　*/

function getNumberOfComment (){
  return 5;
}
echo getNumberOfComment();

echo '<br>';

$commentNumber = getNumberOfComment();
echo $commentNumber;

echo '<br>';

/* 4．インプット引数　２つ
　アウトプット戻り値　あり　の場合　*/

function sumPrice($int1, $int2){
  $int3 = $int1 + $int2;
  return $int3;
}
$total = sumPrice(3,5);
echo $total;

?>