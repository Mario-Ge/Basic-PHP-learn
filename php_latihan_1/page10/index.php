<?php
$menus = array(
  array('name' => 'GULAI', 'price' => 9),
  array('name' => 'PASTA', 'price' => 12),
  array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah
$total = 0;
foreach($menus as $menu){
  echo $menu['name']." berharga $ ".$menu['price'];
  echo "<br/>";
  $total += $menu['price'];
}
echo "Harga total adalah $".$total;
?>