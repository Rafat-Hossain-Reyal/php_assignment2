<?php
require_once './Book.php';
require_once './Customer.php';

$book1 = new Book("868686", "Ever_Forever", "St. John", 28);
$customer1 = new Customer(1910576122, "Md. Rafat Hossain", "Reyal", "rhreyal@gmail.com");

echo $book1->__toString();
echo $customer1->__toString();

echo "</br>".$book1->getCopy();
?>
