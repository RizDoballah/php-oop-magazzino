<?php
class product {
  public $name;
  public $category;
  public $description;
  public $image;
  public $price;
  public $stockQuantity;

  public function __construct($_name, $_category, $_price) {
    $this->name = $_name;
    $this->category = $_gategory;
    $this->price = $_price;
  }

  public function getName() {
    return $this->name;
  }
  public function discountPrice($discount){
    if (empty($this->price)) {
      die('not possible to calculate discount')
    }
    return $this->price * $discount 
  }
  public function setPrice($_price) {
    if(!is_int($price)) {
     die('non e un numero');
    }

   $this->price = $_price;
  }
  public function getPrice() {
    return $this->price;
  }

}
