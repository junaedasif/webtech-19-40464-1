<script type="text/javascript">

function validation()
{
  var name= document.getElementById("yourname");
  var email= document.getElementById("email");
  var coursename= document.getElementById("coursename");
  var salary= document.getElementById("salary");
  var comment=document.getElementById("comment");


  //alert("hello");

  if(name.value.trim()=="" )
  {
     document.getElementById("yournameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("yournameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("yournameErr").innerHTML= "";

  }

  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }


  if(coursename.value.trim()=="")
  {
    document.getElementById("coursenameErr").innerHTML= "*Course name is requied";
    return false;
  }
  else {

      document.getElementById("coursenameErr").innerHTML= "";
}

if (salary.value.trim()=="") {
  document.getElementById("salaryErr").innerHTML = "Salary is required";
  return false;
} else {


  if(isNaN(salary.value))
  {
    document.getElementById("salaryErr").innerHTML ="Please input Numeric Number";
    return false;
  }
  else {

        if(salary.value>10000 || salary.value<500)
        {
            document.getElementById("salaryErr").innerHTML = "Salary must be between 500 to 10000";
          return false;
        }
        else {
            document.getElementById("salaryErr").innerHTML = "";
        }

            }
        }

    if(comment.value.trim()=="")
        {
          document.getElementById("commentErr").innerHTML= "Comment is required";
          return false;
        }
        else {

          if(comment.value.length<20)
          {
            document.getElementById("commentErr").innerHTML="Comment must not be less than eight (20) characters";
            return false;
          }
          else {
            document.getElementById("commentErr").innerHTML="";
          }

          }

return true;


}


function checkYourname()
{
  var name= document.getElementById("yourname");
  if(name.value.trim()=="" )
  {
     document.getElementById("yournameErr").innerHTML= "*Name is requied";
     return false;
  }
  else {

  if(name.value.split(" ").length<2)
       {
        document.getElementById("yournameErr").innerHTML= "*Name must contains at least two words ";
        return false;
       }
       document.getElementById("yournameErr").innerHTML= "";

  }
}

function checkEmail()
{
  var email= document.getElementById("email");
  if(email.value.trim()=="")
  {
    document.getElementById("emailErr").innerHTML= "*email is requied";
    return false;
  }
  else {
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   if(!email.value.match(mailformat))
    {
      document.getElementById("emailErr").innerHTML= "*Invalid email format";
      return false;
    }
    else {
      document.getElementById("emailErr").innerHTML= "";
    }
  }

}


function checkCoursename()
{
    var coursename= document.getElementById("coursename");
  if(coursename.value.trim()=="")
  {
    document.getElementById("coursenameErr").innerHTML= "*Course name is requied";
    return false;
  }
  else {

      document.getElementById("coursenameErr").innerHTML= "";

}
}

function checkSalary()
{
  var salary=document.getElementById("salary");

  if (salary.value.trim()=="") {
    document.getElementById("salaryErr").innerHTML = "Salary is required";
    return false;
  } else {


    if(isNaN(salary.value))
    {
      document.getElementById("salaryErr").innerHTML ="Please input Numeric Number";
      return false;
    }
    else {

          if(salary.value>10000 || salary.value<500)
          {
              document.getElementById("salaryErr").innerHTML = "Salary must be between 500 to 10000";
            return false;
          }
          else {
              document.getElementById("salaryErr").innerHTML = "";
          }

              }
          }
}

function checkComment()
{
  var comment=document.getElementById("comment");

  if(comment.value.trim()=="")
      {
        document.getElementById("commentErr").innerHTML= "Comment is required";
        return false;
      }
      else {

        if(comment.value.length<20)
        {
          document.getElementById("commentErr").innerHTML="Comment must not be less than eight (20) characters";
          return false;
        }
        else {
          document.getElementById("commentErr").innerHTML="";
        }

        }
}

function checkGender()
{
  var gender= document.getElementsByName("gender");

  if(!(gender[0].checked || gender[1].checked || gender[2].checked))
  {
    document.getElementById("genderErr").innerHTML= "*Gender is requied";
    return false;
  }
  else {
    document.getElementById("genderErr").innerHTML= "";
  }
}

</script>
