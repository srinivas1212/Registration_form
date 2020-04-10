
<?php
  $connection=mysqli_connect("localhost","root","msr","db1")or die("couldn't connect".mysqli_connect_error());
  
 if($connection)
{
echo "connection is successful!";
}
//mysqli_close($connection);

?>
<html>

<style>
#name,#email,#pwd,#confpwd,#sub
{
margin-top:20px;
margin-right:100px;
margin-bottom:10px;
}
#sign
{
color:#0a6e63;
margin-top:20px;
margin-bottom:30px;
margin-left:680px;

}


#checkbox
{
margin-top:20px;
}
</style>

<head?</head>
<body>



<center><h1><font color="#0a6e63"> Registration form </font> </h1></center>

<div id="sign"><h1>Sign Up</h1></div>
<div id="one"  class="form">
<form action="" method="POST">
<center>
<table>
<tr>
 <th><h5>Please fill in this form to create an account</h5></th> 
</tr>


<tr>
<td><font color="#0a6e63">Full Name</font> </td>
<td><input id="name"  type="text" name="input_name"  placeholder="Enter Name" required=""></td>
</tr>

<tr>
<td><font color="#0a6e63">Email</font> </td>
<td><input id="email"  type="email" name="input_email"  placeholder="Email Id" required=""></td>
</tr>

<tr>
<td><font color="#0a6e63">Password </font> </td>
<td><input id="pwd"  type="password" name="input_pwd"  placeholder="Password" required=""></td>
</tr>


<tr>
<td><font color="#0a6e63"> Confirm Password</font> </td>
<td><input id="confpwd" type="password" name="input_confpwd " placeholder="Confirm Password" required=""></td>
</tr>




<tr>
<td></td>
<td> <input id="checkbox"  type="checkbox" name="accept" value="Bike">
<label for="accept"> I Accept the<font color="#13544d"> Terms of Use</font> &<font color="#13544d"> Privacy Policy </font></label></td>
</tr>



<tr>
<td></td>
<td><input id="sub" name="submit" type="submit" value="Sign Up" </td>
</tr>




</table>
</center>
</form>
</body>
</html>


<?php

if(isset($_POST['submit']))
{

$Vname   =$_POST['input_name'];
$Vemail  =$_POST['input_email'];
$Vpwd    =$_POST['input_pwd'];
$Vconfpwd=$_POST['input_confpwd'];


if( strcmp($Vpwd,$Vconfpwd) == 0)
   {
    $query="insert into Regn_form(name,email,pwd)values('$Vname','$Vemail','$Vpwd')";

    $run=mysqli_query($connection,$query);

echo "hello";
  if($run)
    {
     echo "data inserted successfully";
    }
     else
     {
      echo "error:".mysqli_error($connection);
     }

   }
else
{
echo "Password Not Matched";
}
}









