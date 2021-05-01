<?php
require_once('menu.php');

class Drink extends Menu {
  private $type;
  
  public function __construct($name, $price, $image, $type) {
    // Hapus 4 baris dibawah
    parent::__construct($name, $price, $image);
    // Panggil constructor class induk dan tetapkan argumentnya
    $this->type = $type;
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>