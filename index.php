<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Partie 4 Exercice 6 : les conditions</title>
  </head>
  <body>
    <p>
      <?php
      for ($i = 1; $i <= 100; $i++) {
        $output = '';
        if ( $i%3 == 0) {
          $output .= 'fizz';
        }
        if ( $i%5 == 0) {
          $output .= 'buzz';
        }
        if ($output == '') {
          $output .= $i;
        }
        echo $output. "\n";
      }
      ?>
    </p>
  </body>
</html>
