<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- Perbarui dan cetak variable $x dibawah -->
  <?php
    $x = $x + 10;
    echo $x;    
  ?>

  <br>

  <!-- Perbarui dan cetak variable $y dibawah -->
  <?php
    $y = $y * 5;
    echo $y;
  ?>

  <br>

  <!-- Perbarui dan cetak variable $a dibawah -->
  <?php
    $a = $a + 1;
    echo $a;
  ?>

  <br>
  
  <!-- Perbarui dan cetak variable $b dibawah -->
  <?php
    $b = $b - 1;
    echo $b;
    
  ?>

</body>
</html>
