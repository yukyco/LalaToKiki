<!DOCTYPE HTML>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <title>Lala To Kiki</title>
    <meta name="description" content="LalaToKiki Description" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link href="css/plugins.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/application.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="js/libs/modernizr-2.6.2.min.js"></script>
  </head>

<body>
<?php
$ext = pathinfo($_FILES['upfile']['name']);
$perm = array('gif', 'jpg', 'jpeg', 'png');

if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
  $msg = array(
    UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を越えています。',
    UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZE 制限を越えています。',
    UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません。',
    UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
    UPLOAD_ERR_NO_TMP_DIR => '一時保存フォルダが存在しません。',
    UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
    UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました。'
  );
 $err_msg = $msg[$_FILES['upfile']['error']];
} elseif (!in_array(strtolower($ext['extension']), $perm)) {
  $err_msg = '画像以外のファイルはアップロードできません。';
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
	$err_msg = 'ファイルの内容が画像ではありません。';
} else {
  $src = $_FILES['upfile']['tmp_name'];
  $dest = mb_convert_encoding($_FILES['upfile']['name'], 'SJIS-WIN', 'UTF-8');  if (!move_uploaded_file($src, '../doc/'.$dest)) {
    $err_msg = 'アップロード処理に失敗しました。';
  }
}
if (isset($err_msg)) {
  die('<div>'.$err_msg.'</div>');
}
header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/upload.php');

?>
    <!-- FOOTER -->
    <section id="page-footer">

      <div class="social-links">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icon-twitter" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class=" iconic-injected-svg inject-me"><path d="M41,15.2c-0.7,0.2-1.4,0.3-2.2,0.4c1.5-1,2.5-2.3,3.2-4c-0.7,0.4-1.4,0.7-2.2,1c-0.8,0.3-1.6,0.5-2.4,0.7  c-0.7-0.7-1.5-1.2-2.3-1.6c-0.9-0.4-1.9-0.6-2.9-0.6c-1,0-1.9,0.2-2.8,0.6c-0.9,0.4-1.6,0.9-2.3,1.6c-0.7,0.7-1.2,1.4-1.6,2.3  c-0.4,0.9-0.6,1.9-0.6,2.8c0,0.6,0.1,1.1,0.2,1.6c-3-0.1-5.8-0.8-8.3-2.2c-2.6-1.3-4.7-3.1-6.5-5.4c-0.6,1.2-1,2.4-1,3.7  c0,1.3,0.3,2.4,0.8,3.5c0.6,1,1.4,1.9,2.4,2.5c-0.7,0-1.3-0.1-1.8-0.2c-0.5-0.2-1-0.4-1.5-0.6v0.1c0,1.8,0.5,3.3,1.6,4.6  c1.1,1.3,2.5,2.1,4.2,2.5c-0.3,0.1-0.6,0.1-0.9,0.2c-0.3,0-0.6,0.1-1,0.1c-0.4,0-0.8-0.1-1.3-0.2c0.4,1.4,1.3,2.6,2.5,3.6  c1.2,0.9,2.6,1.4,4.2,1.5c-2.5,2-5.5,3.1-8.9,3.1c-0.3,0-0.6,0-0.9,0c-0.3,0-0.6,0-0.8-0.1c1.6,1,3.4,1.9,5.2,2.4  c1.9,0.6,3.8,0.9,5.9,0.9c3.3,0,6.2-0.6,8.8-1.9c2.5-1.2,4.7-2.8,6.4-4.8c1.7-2,3.1-4.2,4-6.7c0.9-2.5,1.4-4.9,1.4-7.3v-0.8  c1.4-1.1,2.6-2.4,3.6-3.8C42.3,14.8,41.7,15,41,15.2z"></path></svg></a>
        <a href="http://websta.me/n/hamster_art"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="icon-instagram" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" class=" iconic-injected-svg inject-me"><path fill-rule="evenodd" clip-rule="evenodd" d="M42.5,38.1v2.2c0,1.2-1,2.2-2.2,2.2h-2.2l0,0H11.9l0,0H9.7c-1.2,0-2.2-1-2.2-2.2  v-6.6l0,0V18.4l0,0V9.7c0-1.2,1-2.2,2.2-2.2h8.8l0,0h13.1l0,0h8.8c1.2,0,2.2,1,2.2,2.2v2.2c0,0,0,0,0,0V38.1  C42.5,38.1,42.5,38.1,42.5,38.1z M25,20.6c-4,0-4.4,4.4-4.4,4.4s-0.1,4.4,4.4,4.4s4.4-4.4,4.4-4.4S29,20.6,25,20.6z M38.1,11.9h-6.6  v6.6h6.6V11.9z M38.1,25L38.1,25v-2.2h-4.4l0,0h-0.3c0.2,0.7,0.3,1.4,0.3,2.2v0l0,0l0,0c0,4.8-3.9,8.8-8.8,8.8s-8.8-3.9-8.8-8.8  c0-0.8,0.1-1.5,0.3-2.2h-0.3l0,0h-4.4v15.3h4.4h2.2l0,0h13.1l0,0h6.6v-6.6l0,0V25z"></path>
        </svg></a>
      </div>

      <p class="copy-02">Copyright © 2015 minimalland lala to kiki. All Rights Reserved.</p>
      <p class="copy-02">Made With Love By @AirTheme</p>

    </section>

  </section>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.2.min.js"><\/script>');</script>

  <script src="js/plugins.js"></script>
  <script src="js/application.js"></script>

</body>
</html>