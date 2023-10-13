<?php

/* 図解で分かるPHP配列関数一覧
http://html2php.starrypages.net/php/array-funcs
*/

/* 配列の関数　array_push
1つ以上の要素を配列の最後に追加する(配列に配列を追加する）　*/

$array = ['りんご', 'みかん'];

array_push($array, 'ぶどう', '梨');

echo '<pre>';
var_dump ($array);
echo '</pre>';




?>