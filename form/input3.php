<?php
/* フォームのセキュリティ：代表的な攻撃と対策
●XSS(Cross-Site Scripting)
●クリックジャッキング
●CSRF(Cross-Site Request Forgeries)
●SQLインジェクション

対策：サニタイズ（消毒）、バリデーション（検証）
*/

// CSRF(Cross-Site Request Forgeries)対策
/*CSRFは偽物のinput.phpから悪意のあるページに情報を飛ばしてしまう
本物と偽物を見分けるために、$_SESSIONを使ったトークンを発行して対策する
※$_GET, $_POSTは一回きりでデータが消えるが、$_SESSIONはずっと残る

<?php if($pageFlag === 0 ) : ?>
<?php
if(!isset($_SESSION['csrfToken'])){
  $csrfToken = bin2hex(random_bytes(32));
  $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>
*/
session_start();


// クリックジャッキング対策
header('X-FRAME-OPTIONS:DENY');


if(!empty($_SESSION)){
  echo '<pre>';
  var_dump($_SESSION) ;
  echo '</pre>';
}


// XSS(Cross-Site Scripting)対策　→サニタイズ
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}



$pageFlag =0;

if(!empty($_POST['btn_confirm'])){
  $pageFlag = 1;
}
if(!empty($_POST['btn_submit'])){
  $pageFlag = 2;
}

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>


<?php if($pageFlag === 1 ) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
<form method="POST" action="input3.php">
氏名
<?php echo h($_POST['your_name']) ;?>
<br>
メールアドレス
<?php echo h($_POST['email']) ;?>
<br>
<input type="submit" name="back" value="戻る">
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']) ;?>">
<input type="hidden" name="email" value="<?php echo h($_POST['email']) ;?>">
<input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']) ;?>">
</form>

<?php endif; ?>

<?php endif; ?>


<?php if($pageFlag === 2 ) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
送信が完了しました。

<?php unset($_SESSION['csrfToken']); ?>
<?php endif; ?>
<?php endif; ?>


<?php if($pageFlag === 0 ) : ?>
<?php
if(!isset($_SESSION['csrfToken'])){
  $csrfToken = bin2hex(random_bytes(32));
  $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>

<form method="POST" action="input3.php">
氏名
<input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']) ;} ?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']) ;} ?>">
<br>
<input type="submit" name="btn_confirm" value="確認する">
<input type="hidden" name="csrf" value="<?php echo $token; ?>">
</form>
<?php endif; ?>

</body>
</html>