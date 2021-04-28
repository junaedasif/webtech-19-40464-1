<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <h2>ADD PRODUCT</h2>

    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" method="POST" enctype="multipart/form-data"  action="../Controller/addProductController.php">
        Name: <input type="text" name="name" >
        <!-- <span class="error">* <?php echo $nameErr;?></span> -->
        <br><br>
        Buying Price: <input type="text" name="buyingPrice" >
        <!-- <span class="error">* <?php echo $buyingPriceErr;?></span> -->
        <br><br>
        <br>
        Selling Price: <input type="text" name="sellingPrice"  />
        <!-- <span class="error">* <?php echo $sellingPriceErr;?></span> -->
         <br><br>
         <input type="submit" name="addProduct" value="Save">

    </form>
  </body>
</html>
