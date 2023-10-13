<?php

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST) ;
  echo '</pre>';
}
/*$_POST,$_GETをスーパーグローバル変数と呼ぶ
PHPの場合は9種類ある
特徴として、連想配列になっている

GET通信の場合はアドレスバーの箇所が、http://localhost/php_test/form/input.php?your_name=　となるが、
POST通信の場合はアドレスバーの箇所が、http://localhost/php_test/form/input.php　となる
パスワードの入力など、アドレスバーに表示されてはダメな項目はPOSTで送信する
*/
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>

<form method="POST" action="input.php">
氏名
<input type="text" name="your_name">
<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ

<input type="submit" value="送信">

</form>

</body>
</html>