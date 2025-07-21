<?php
$db_surver="localhost";
$db_user="root";
$db_pass="";
$db_name="loginsystem";
$conn=mysqli_connect($db_surver,$db_user,$db_pass,$db_name);
if(isset($_POST['btn']))
{
    $breakfast=isset($_POST['breakfast'])? 1:0;
    $university=isset($_POST['university'])?1:0;
    $lunch=isset($_POST['lunch'])?1:0;
    $exercise=isset($_POST['exercise'])?1:0;
    $coaching=isset($_POST['coaching'])?1:0;
    $dinner=isset($_POST['dinner'])?1:0;
    $datetime = isset($_POST['datetime']) ? $_POST['datetime'] : '';
}
if($datetime ==='')
    echo "please fill the date time field";
else
{
    try{
    $sql="insert into todolist(dateno,breakfast,university,lunch,exercise,coaching,dinner) values('$datetime','$breakfast','$university',
    '$lunch','$exercise','$coaching','$dinner')";
     if(mysqli_query($conn,$sql))
            echo "<script>alert('thanks for joining')</script>";
        else
            echo "<script>alert('something went wrong')</script>";
    }
    catch( Exception $e){
        echo "please change the date";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
          <a href="index.html">
           <button>Input</button>
          </a>
          <a href="showResult.php">
           <button>Userdata</button>
          </a>
    </div>
</body>
</html>