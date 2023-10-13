<?php

// 複数の値を展開、表示するときに使う　foreach

$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー',
];

// バリューのみ表示
foreach($members as $member){
  echo $member;
}
/*　元々の変数を複数形にしておき、
as　の後に単数形にしてあげる
*/

echo '<br>';

// キーとバリューそれぞれ表示
foreach($members as $key => $value){
  echo $key . 'は' . $value . 'です';
} 

echo '<br>';

$members_2 = [
  '本田'=> [
  'height' => 170,
  'hobby' => 'サッカー',
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

// 多段階の配列を展開
foreach($members_2 as $member_1){
  foreach($member_1 as $member){
   echo $member;
  }
}

echo '<br>';

foreach($members_2 as $member_1){
  foreach($member_1 as $member => $value){
   echo $member . 'は' . $value . 'です';
  }
}

?>