<?php
require_once '../Controller/productInfoController.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $products): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $products['ID'] ?>"><?php echo $products['NAME'] ?></a></td>
				<td><?php echo $products['BUYING'] ?></td>
				<td><?php echo $products['SELLING'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $products['ID'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $products['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


</body>
</html>
