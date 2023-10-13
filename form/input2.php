<?php

if(!empty($_POST)){
  echo '<pre>';
  var_dump($_POST) ;
  echo '</pre>';
}

/* お問い合わせフォームで使われる3つの画面：入力、確認、完了　
全てのファイルをわけて作る場合は
入力：input.php, 確認：confirm.php, 完了：thanks.php
*/

/*今回は、1つのファイル input.php で３つの画面をまかなう場合
$pageFlagなどの変数によって表示する画面を切り替えることができる*/

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


<?PHP if($pageFlag === 1 ) : ?>
<form method="POST" action="input.php">
氏名
<?php echo $_POST['your_name'] ;?>
<br>
メールアドレス
<?php echo $_POST['email'] ;?>
<br>
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name'] ;?>">
<input type="hidden" name="email" value="<?php echo $_POST['email'] ;?>">
</form>

<?php endif; ?>

<?PHP if($pageFlag === 2 ) : ?>
送信が完了しました。
<?php endif; ?>


<?PHP if($pageFlag === 0 ) : ?>

<form method="POST" action="input.php">
氏名
<input type="text" name="your_name">
<br>
メールアドレス
<input type="email" name="email">
<br>
<input type="submit" name="btn_confirm" value="確認する">

</form>
<?php endif; ?>

</body>
</html>