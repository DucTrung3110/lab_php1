<?php
require 'Product.php';

$prd = new Product('Mouse', 15.5, 3);
echo $prd->getInfo();          // Product: Mouse, Price: 15.5, Quantity: 3
echo ' Total: ' . $prd->calculateTotal();  // Total: 46.5