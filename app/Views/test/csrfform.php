<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$SecConfig = config('Config\\Security');
echo 'regenerate:'. $SecConfig->regenerate;
echo '<br>';
echo 'redirect:'. $SecConfig->redirect;
echo '<br>';
?>
  <form action="/home/okform" method="post">
    <input type="hidden" name="<?= csrf_token() ?>" value="www">
    data:<input type="text" name="keydata"> <br>
    <input type="submit" value="send">
  </form>
<?php
$security = \Config\Services::security();
echo '<pre>';
print_r($security);
echo '</pre>';
?>
</body>
</html>