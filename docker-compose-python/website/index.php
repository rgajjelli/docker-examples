<html>

	<head>
		<title>My docker-compose example </title>
	</head>

	<body>
		<h1> Hello Guys!!, Welcome to docker-compose PHP/Python example </h1>
		<ul>
			<?php 
				$json = file_get_contents('http://product-service');
				$obj = json_decode($json);

				$products = $obj->products;
				foreach ($products as $product) {
					# code...
					echo "<li>$product</li>";
				}
			?>
		</ul>		
	</body>
</html>