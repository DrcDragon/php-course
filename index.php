<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
	
	//varibles
	$name = "PHP Store";
	$credit = 1000;
	
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    echo "<h1>Welcome to ".$name."!</h1>";
	echo "<h2>You have $".$credit." in your wallet.</h2>";
	
		//Array of Products
		$products['Computer']=750;
		$products['Car']=15000;
		$products['iPhone']=1000;
		$products['Toaster']=75;
	
		//foreach loop to list all products in the array	
		foreach($products as $key => $value){		
			echo "<p>The ".$key." costs $".$value,"</p>";
		}
		
		echo "<h2>Items you can afford</h2>";
		//foreach loop with a conditional stamement to list any items in the array that is less or equal to the varible $credit	
		foreach($products as $key => $value){
			if($value <= $credit ){
				echo "<p>".$key."</p>";
			}
		}
		
		// Using Maths to the sum of 2 varibles
		$amount=800;
		$taxRate=0.0825;
		$addedTax = $amount*$taxRate;	//amount = 800, tax = .0825
		echo $addedTax;
		
		//Create a Function
		function tax_calc($amount,$tax){
			$calculate_tax = $amount*$tax;
			$amount = round($amount+$calculate_tax,2);
			return $amount;
		}
		
		echo tax_calc(750,0.223);
    ?>
  </body>
</html>