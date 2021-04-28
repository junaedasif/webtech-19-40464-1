<?php
require_once '../Controller/productInfoController.php';

$products = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>

	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $products['ID'] ?>"><?php echo $products['NAME'] ?></a></td>
		<td><?php echo $products['BUYING'] ?></td>
		<td><?php echo $products['SELLING'] ?></td>

	</tr>

</table>


</body>
</html>
