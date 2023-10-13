<?php

/* ファイルの読み込み　require, include

require(); require_once(); 
→エラーがでて処理がとまってしまう
オススメ
require_once(); →一回だけ読み込むという意味

include(); include_once(); 
→警告がでて処理が続けられる場合は続ける

__DIR__ __FILE__ マジック定数　
↑アンダー２つ、DIR・・・Directory
→現在のファイルの絶対パスを表示することができる

他の方法で名前空間（namespace）もあり
・・・Laravelなどのフレームワークはこちらが主流
*/


// require('読み込むファイル名');
require 'common.php';
// require ('common.php'); もOK

echo $commonVariable;
commonTest();

/* 読み込むファイル名の入力が間違っている場合は
読み込みが失敗し、エラーがでて処理がとまる

includeの場合はエラーの出方が変わる*/

/* ファイルが同じ階層にあれば、
require('読み込むファイル名');だけでいいが、

フォルダを分けたいときは、
require('フォルダ名/読み込むファイル名');

require('common/common2.php');
echo $commonVariable;
commonTest();


フォルダが1つ上の階層にある場合は、
require('../フォルダ名/読み込むファイル名');

*/

echo'<br>';

//__DIR__ __FILE__ マジック定数

echo __DIR__;
/*　→　C:\xampp\htdocs\php_test
現在のファイルの絶対パスを表示することができる
require __DIR__ . '/common.php'; としても結果は同じ
*/

echo'<br>';

echo __FILE__;
/* → C:\xampp\htdocs\php_test\index20.php
現在のファイルの在りかを表示することができる

?>