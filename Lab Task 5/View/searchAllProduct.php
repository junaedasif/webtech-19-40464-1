
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>PRODUCT_id</th>
      <th>Name</th>
			<th>Buying Price</th>
      <th>Selling Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['ID'] ?></a></td>
        <td><?php echo $product['NAME'] ?></td>
				<td><?php echo $product['BUYING'] ?></td>
        <td><?php echo $product['SELLING'] ?></td>
				<td><a href="../View/editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="../View/deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


</body>
</html>
