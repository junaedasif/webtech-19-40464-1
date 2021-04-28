
<link rel="stylesheet" href="../Css/viewProfileStudent.css">

<script type="text/javascript">



  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "../Controller/getDetailsController.php?q="+str, true);
    xhttp.send();
}

</script>

<?php

require_once '../Controller/studentInfoController.php';



if(isset($_SESSION['username']))
{
$data = fetchStudent($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $student):

         $name= $student['NAME'] ;
         $email=$student['EMAIL'];
         $username= $student['USERNAME'];
         $birth=$student['BIRTH'];
         $gender= $student['GENDER'] ;
         $image=$student['IMAGE'];
    endforeach;

    echo "</div>";
   echo "<div class='profile'>";
    echo ('


         <tr>
              <td>
                   <img src="data:image/jpeg;base64,'.base64_encode($image ).'"  class="img-thumnail" />
              </td>
         </tr>
    ');
    include("changeProfilePictureView.php");

    echo "<br /><p>NAME: &nbsp; $name</p>";
    echo "<br /><p>EMAIL: &nbsp;$email</p>";
    echo "<br /><p>USERNAME: &nbsp;$username</p>";
    echo "<br /><p>BIRTH: &nbsp;$birth</p>";
    echo "<br /><p>GENDER: &nbsp;$gender</p>";

    ?>
    <br>
    <button type="button"  <?php echo ('onclick="showDetails(\'' . $username . '\')"');  ?> > View Details</button>

    <div id="txtHint" ></div>
  </div>

     </div>
    <?php


  }
}

else {
  echo "You cannot access this page!!";
}
 ?>
