

<header>
  <?php include("../Model/head.php") ?>
</header>

 <?php
 require_once '../Controller/adInfoController.php';


 $data = fetchAllAd();



   if($data!=NULL)
   {
     foreach ($data as $i => $ad):

          $name= $ad['NAME'] ;
          $email=$ad['EMAIL'];
          $course= $ad['COURSE'] ;
          $salary=$ad['SALARY'];
          $comment= $ad['COMMENT'] ;
          $imagedata=fetchImage($name);
          if($imagedata!=NULL)
          {
            foreach ($imagedata as $j => $student):
                 $image=$student['IMAGE'];
            endforeach;

            echo "<br />";
              echo '

                             <img src="data:image/jpeg;base64,'.base64_encode($image ).'" height="200" width="200" class="img-thumnail" />

              ';
          }

      ?>


  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>

    <p ><?php echo "$name"; ?></p>
    <p ><?php echo "$email"; ?></p>
    <p ><?php echo "$course"; ?></p>
    <p ><?php echo "$salary"; ?></p>
    <p ><?php echo "$comment"; ?></p>

      <?php

     endforeach;

   }

  ?>
</body>

  <?php include("../Model/foot.php"); ?>

</html>
