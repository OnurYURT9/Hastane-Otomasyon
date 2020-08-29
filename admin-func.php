<?php
session_start();

$con = mysqli_connect("localhost","root","","babasdb");
if(isset($_POST['signin']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=scripcslashes($username);
    $password= scripcslashes($password);
    $username=mysqli_real_escape_string($con,$username);
    $password=mysqli_real_escape_string($con,$password);

    if(empty($username)||empty($password))
    {
        header("Location:admin-func.php?signin=empty");
        exit();
    }
    else{
        $query="select * from user_admin where username='$username' and password='$password'";
        $result=mysqli_query($con,$query);
        $row=mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['username']="$username";
            $_SESSION['password']="$password";
            header("Location:hospital-admin.php?signin=empty");
        }
        else
        {
            header("Location:admin-func.php");
        }
    }
}
function get_username(){

    global $con;
    $query ="select * from user_admin";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $username=$row['username'];
        $password=$row['password'];
        echo"<tr>
        <td>$username</td>
        <td>$password</td>
        </tr>"
    }


}





?>