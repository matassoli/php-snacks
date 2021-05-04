<?php
    $matches = [
  [
    "squadra_casa" => "Olimpia Milano",
    "punti_casa" => 55,
    "squadra_ospite"  => "Cantù",
    "punti_ospite" => 60,
  ],
  [
    "squadra_casa" => "Squadra1",
    "punti_casa" => 60,
    "squadra_ospite"  => "Squadra2",
    "punti_ospite" => 49,
  ],
  [
    "squadra_casa" => "Squadra3",
    "punti_casa" => 54,
    "squadra_ospite"  => "Squadra4",
    "punti_ospite" => 55,
  ],
];
?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack-1</title>
  </head>
  <body>

<?php
foreach ($matches as $match) {
  echo "{$match["squadra_casa"]} - {$match["squadra_ospite"]} | {$match["punti_casa"]} - {$match["punti_ospite"]}</br>";}
?>

  </body>
</html>
