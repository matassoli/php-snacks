<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title>Snack-2</title>
</head>

<body>

  <p> <?php echo $name ?> </p>
  <p> <?php echo $mail ?> </p>
  <p> <?php echo $age ?> </p>




  <?php
  if (strlen($name) > 3
    && is_numeric($age) == true
    && strpos($mail, "@") == true
    && strpos($mail, ".") == true) {
      echo "Accesso riuscito";
  } else {
      echo "Accesso negato";
  }
  ?>

</body>
</html>
