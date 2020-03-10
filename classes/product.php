<?php
  require_once __DIR__ . '/../traits/GetLocation.php';
  require_once __DIR__ . '/../traits/GetQuantity.php';
  class product
  {
    use GetLocation;
    use GetQuantity;
    public $name;
    public $category;
    public $description;
    public $image;
    public $price;

    public function __construct($_name, $_price, $_category)
    {
      $this->name = $_name;
      $this->category = $_category;
      $this->price = $_price;
    }

    public function getName()
     {
      return $this->name;
    }
    public function discountPrice($discount)
    {
      if (empty($this->price)) {
        die('not possible to calculate discount');
      }
      return $this->price / $discount;
    }
    public function setPrice($price)
     {
      if(!is_int($price)) {
       die('non e un numero');
      }

     $this->price = $price;
    }
    public function getPrice()
     {
      return $this->price;
    }

  }
