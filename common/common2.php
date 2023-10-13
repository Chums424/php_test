<?php

$commonVariable = '共通の変数です2';
/* 変数にはスコープ（有効範囲）があり、
$commonVaribaleはグローバル変数
*/

function commonTest(){
  echo '外部ファイルの関数です2';
}

?>