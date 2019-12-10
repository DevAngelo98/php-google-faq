<?php

  include "data.php";

  // foreach ($listaFaq as $faq) {
  //   print_r($faq["domanda"]);
  // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <?php foreach ($listaFaq as $faq) { ?>
    <h1><?= $faq["domanda"];?></h1>
    <p><?= nl2br($faq["risposta"]);?></p>
  <?php }?>

</body>
</html>