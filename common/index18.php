<?php

/* 組み込み関数　in　ユーザー定義関数
例）郵便番号チェック（※本来は正規表現で書く
全角を半角に、ハイフンを削除、数字かどうか、7文字かどうか
 */

// 関数名は camelCase　か　snakeCase

$postalCode = '123-4567';

/* camelCase
checkPostalCode() */

function checkPostalCode($str){
  $replaced = str_replace('-','',$str);
  $length = strlen($replaced);

  var_dump($length);
  /* 関数の途中でどうなっているのか知りたいときは、
  var_dump をいれる*/
  if($length === 7){
    return true;
  }
  return false;
}

var_dump(checkPostalCode($postalCode));

echo '<br>';

/* snakeCase
check_postal_code() */


/* できるだけ同じような処理が続くときは
関数化　+　ファイル分割を！
*/

/* php_test_20210703 
→　section1 
→　appendix
→ 「function_list.txt」・・・よく使う関数リスト
  「function_english.txt」・・・英単語のつけ方リスト
*/


?>