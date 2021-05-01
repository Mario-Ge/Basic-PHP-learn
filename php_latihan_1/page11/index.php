<?php
$menus = array(
  array('name' => 'GULAI', 'price' => 9),
  array('name' => 'PASTA', 'price' => 12),
  array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah
$total = 0;
$maxPrice =0;
$maxPriceMenuName = '';
foreach($menus as $menu){
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name ." berharga $ ".$price;
  echo "<br/>";
  $total += $price;
  if ($price > $maxPrice) {
    $maxPrice = $price;
    $maxPriceMenuName = $name;
  }
}
echo "Harga total adalah $".$total;
echo "<br/>";
echo "Harga item termahal adalah ".$maxPriceMenuName." dengan harga $".$maxPrice;

?>