<?php
$server ="localhost";
$username="root";
$password=""; 
$database="ustreapdb";
$con = mysqli_connect($server,$username,$password,$database);
if(!$con)
{
    die("fails due to ".mysqli_connect_error());
}
//echo "connected to the db";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $submission_date=date("Y-m-d H:i:s");

    $sql="INSERT INTO Formsubmission(NAME,age,gender,email,phone,other,submission_date)
    values('$name','$age','$gender','$email','$phone','$desc','$submission_date')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Submitted Successfully');</script>";
    }
    else
    {
        echo "Error  ".mysqli_error($con);
    }

    mysqli_close($con);
}
?>