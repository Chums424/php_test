<?php

/* 変数のスコープ(有効範囲)
2種類：
グローバル・・・開発環境全てに影響を及ぼす変数
ローカル・・・それぞれの環境の中だけで有効
※スーパーグローバル変数もある
*/

$globalVariable = 'グローバル変数です';

function checkScope(){
  $localVariable = 'ローカル変数です';
  echo $localVariable;
}

echo $globalVariable;

// echo $localVariable; 
/*関数の外側で呼び出そうとしても表示されない
関数の中に入っている変数は、関数の中でだけ使える
localVariableを表示したい場合は、設定している関数checkScopeを実行*/
checkScope();

echo '<br>';

$globalVariable = 'グローバル変数です';
/* 関数の中でglobal変数を設定してもそのままでは使えない
function checkScope(){
  $localVariable = 'ローカル変数です';
  echo $globalVariable;
}
*/

/*どうしても使いたい場合は、globalというキーワードをつける
function checkScope(){
  $localVariable = 'ローカル変数です';
  global $globalVariable;
  echo $globalVariable;
}
*/
/* 実際はglobalというキーワードを使うことはほとんどない
global と　local　それぞれスコープ（有効範囲）が
決まっていて使い分けができるのに、
globalというキーワードを使うことでごちゃごちゃになるから。
*/

function checkScope($str){
  $localVariable = 'ローカル変数です';
  echo $str;
}

echo $globalVariable;
echo $localVariable;

checkScope($globalVariable);

//　↑エラーでてる…

?>