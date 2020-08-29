
<?php
$con = mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){      
    $username = "admin";
    $password = "pass";
    $query = "select * from logintb where username='$username' and password='$password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
         $_SESSION['username']=$username;
         $_SESSION['password']=$password;
      header("Location:hospital-admin.php");
    }
    else
      
   //   echo "<script> alert ('Hatalı giriş')</script>";
    //  echo "<script> window.open('hospital-index.php','_self')</script>";
   header("Location:hospital-index.php");
    
}



if(isset($_POST['gonder']))
{
 
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
   // $docapp = $_POST['docapp'];
   


    $query="INSERT INTO doktorapp (fname,lname,email,contact)
    values ('$fname','$lname','$email','$contact')";
  
    $result = mysqli_query($con,$query);
    if ($result)
    {
        echo  "<script> alert('Appointment registered.')</script>";
        echo "<script>window.open('hospital-admin.php','_self')</script>";
    }
}
function get_patient_details(){
    global $con;
    $query="select * from doktorapp";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
       // $docapp = $row['docapp'];
        echo "<tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
       
        </tr>";
    }
}
?>