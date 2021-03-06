<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hello World <br>

  控制結構, 範例一 <br>
  <?php if ($isLogin == TRUE) { ?>
    Login is TRUE
  <?php } else { ?>
    Login is FALSE
  <?php } ?>
  
  <hr>

  控制結構, 範例二 <br>
  <?php if ($isLogin == TRUE) : ?>
    Login is TRUE
  <?php else : ?>
    Login is FALSE
  <?php endif ?>
  
</body>
</html>