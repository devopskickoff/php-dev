<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
     ['tireqty'=>$tireqty, 'oilqty'=>$oilqty, 'sparkqty'=>$sparkqty, 'find'=>$find]= $_POST;
     $totalqty =0;
     $totalqty = $tireqty + $oilqty + $sparkqty;

     echo "<p>Items ordered:".$totalqty."<br/>";

     define('TIREPRICE',100);
     define('OILPRICE',10);
     define('SPARKPRICE',4);

     $totalamount = $tireqty * TIREPRICE
                    + $oilqty * OILPRICE
                    + $sparkqty * SPARKPRICE;

     echo "Subtotal : $".number_format($totalamount,2)."<br/>";

     $taxrate = 0.10;
     $totalamount = $totalamount * (1+$taxrate);
     echo "Total including tax : $".number_format($totalamount,2)."</p>";

     if($find == "a"){
         echo "<p>Regular customer.</p>";
     } elseif($find == "b"){
         echo "<p>Customer referred by TV advert.";
     } elseif($find == "c"){
         echo "<p>Customer referred by phone directory.</p>";
     } elseif ($find == "d"){
         echo "<p>Customer referred by word of mouth.</p>";
     } else {
         echo "<p>We do not know how this customer found us</p>";
     }

     ?>
</body>
</html>