<?php
  require_once 'Product.php';
  require_once __DIR__ . '/../traits/GetLocation.php';
  require_once __DIR__ . '/../traits/GetQuantity.php';

  class Smartphone extends Product
  {
    use GetLocation;
    use GetQuantity;
    public $brand;
    public $camera;
    public $memory;
    public $sim;
    public $color;

    function __construct($_brand, $_name,$_category, $_price, $_camera, $_memory)
    {
      parent::__construct($_name, $_price, $_category);
      $this->brand = $_brand;
      $this->camera = $_camera;
      $this->memory = $_memory;

    }
    public function getBrand() {
       return $this->brand;
   }
   public function getMemory() {
      return $this->memory;
  }
  }
