<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は" . $name . "<br>". "希望商品は" . $product . "<br>". "注文数は" . $number;
