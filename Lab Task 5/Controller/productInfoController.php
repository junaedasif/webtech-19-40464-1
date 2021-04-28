<?php

require_once ('../Model/model.php');

function fetchAllProducts(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}
?>
