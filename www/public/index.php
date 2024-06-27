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
 echo '<br>';
 add(5,5);
 echo '<br>';
 subtract(5,5);
 echo '<br>';
 multiply(5,5);
 echo '<br>';
 divide(5,5);
 echo '<br>';
performCalculation(10,5,'divide');
echo '<br>';
mathArray($a1,$a2,$mathAr);
echo '<br>';
multipliziere(5, 5, 12, 1);
$multiply(5);
echo '<br>';
echo $multiplier2(10);
echo '<br>';
echo $multiplier3(10);
echo '<br>';
echo rekursiv(1);

 

  ?>

</body>

</html>