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
$totalPrice = 0; // Variable untuk menyimpan harga total
$maxPrice = 0;
foreach ($prices as $price) {
  // Tambahkan setiap harga ke $totalPrice
  $totalPrice += $price;
  // Ketika lebih besar dari nilai yang disimpan didalam $maxPrice
  if ($price > $maxPrice) {
    // Perbarui $maxPrice dengan nilai yang lebih tinggi
    $maxPrice = $price;
  }
}
echo "Harga total adalah $".$totalPrice."";
echo "<br/> Harga termahal adalah $".$maxPrice."";
?>