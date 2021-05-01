<?php
$prices = array(10, 6, 7, 8);
echo 'Nilai $prices: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$total = 0; // Variable untuk menyimpan harga total
foreach ($prices as $price) {
  // Tambahkan setiap harga ke $totalPrice
  $total += $price;
}
echo "Harga total adalah $".$total."";

?>