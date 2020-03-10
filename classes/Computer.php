<?php
  require_once 'Product.php';
  require_once __DIR__ . '/../traits/GetLocation.php';
  require_once __DIR__ . '/../traits/GetQuantity.php';

  class Computer extends Product
  {
    use GetLocation;
    use GetQuantity;
    public $brand;
    public $cpuFrequency;
    public $ram;
    public $size;
    public $color;

    function __construct($_name, $_brand, $_category, $_price, $_size, $_ram)
    {
      parent::__construct($_name, $_price, $_category);
      $this->brand = $_brand;
      $this->ram = $_ram;
      }
    public function getBrand() {
       return $this->brand;
     }
   public function getRam() {
      return $this->ram;
    }
    public function getSize() {
       return $this->size;
     }
  }
