<?php
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $newtext = str_replace(" sit", "***", $text);

  $array = explode(" ", $text);
  $length = sizeof($array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Primo esercizio php</title>
</head>
<body>
  <h1><?php echo $newtext ?></h1>
  <h2>Il testo contiene <?php echo $length ?> parole</h2>
  <h3>la badword è <?php echo $GET['word']?></h3>
  <h4><?php echo var_dump($GET); ?></h4>
</body>
</html>
