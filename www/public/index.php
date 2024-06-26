<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
</head>

<body>

  <?php
 /*  phpinfo(); */

 include('functions.php');

 begruessen();
 echo '<br>';
 addieren(10, 10);
 echo '<br>';
 addieren(5, 7);
 echo '<br>';
 begruessenPers();
 echo '<br>';
 echo $resultat;
 echo '<br>';
 erstelleListevonArray($opportunity);
 echo '<br>';
 arrayInCamel($opportunity);
 

  ?>

</body>

</html>