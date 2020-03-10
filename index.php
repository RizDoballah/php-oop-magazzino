<?php
  require_once 'classes/Product.php';
  require_once 'classes/Smartphone.php';
  require_once 'classes/Computer.php';

  $asus = new Computer('asus vivoBook S14', 'asus', 'computer', 800, 14, 8 );
  $asus->setPrice(800);
  echo $asus->discountPrice(20);
  echo $asus->getBrand();
  echo $asus->getRam();
  echo $asus->getSize();
