<?php 



 $burgers = 4.95;
 $totalBurgers = $burgers*2;
 $chocoMilkshaake = 1.95;
 $cola = 0.85;
 
 $totalCost = $totalBurgers+$chocoMilkshaake+$cola;//susu paung payy ya mhr
 // echo "$".$totalCost." susu paung payy ya mhr";
 $saleTax = $totalCost*0.075; // ngr payy ya tak money
 // echo "<br>$".$saleTax." ngr payy ya tak money";
 $postTax = $totalCost + $saleTax;
 $preTax = $totalCost*0.16; //ngr kyo payy htr tak money
 // echo "<br>$".$preTax." ngr kyo payy htr tak money";
 $myTax = $preTax - $saleTax; //nga money
 // echo "<br>$".$myTax." nga money";

 $totalBill = $totalCost - $myTax;
 // echo "<br>$".$totalBill." ngr shin ya mak money<br><br>";
 
 // print


 echo "<table border='0' cellspacing='0' cellpadding='5' style='width: 800px; line-height:50px; margin: 0 auto; border:1px solid #eee; padding: 10px; padding-left:30px; margin-top: 10%;'><tr><td><b>Name</b></td><td><b>Price</b></td><td><b>Quantity</b></td><td><b>Total</b></td></tr><tr><td>Hamburgers</td><td>$ ".$burgers."</td><td>2</td><td>$ ".$totalBurgers."</td></tr><tr><td>Chocolate Milkshake</td><td>$ ".$chocoMilkshaake."</td><td>1</td><td>$ ".$chocoMilkshaake."</td></tr><tr><td>Cola</td><td>$ ".$cola."</td><td>1</td><td>$ ".$cola."</td></tr><tr><td colspan='3'>Pre-tax total cost</td><td>$ ".$totalCost."</td></tr><tr><td colspan='3'>Post-tax total cost</td><td>$ ".$postTax."</td></tr><tr><td colspan='3'>Total with tax and tip</td><td>$ ".$totalBill."</td></tr></table>";


 ?>

