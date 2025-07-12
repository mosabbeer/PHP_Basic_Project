<?php
if(isset($_POST['addition']))
{
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
     echo "<h1 style='color:blue;'>rslt is " .($number1+$number2)."</h1>";
}
if(isset($_POST['subtract']))
{
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
     echo "<h1 style='color:blue;'>rslt is " .($number1-$number2)."</h1>";
}
if(isset($_POST['mul']))
{
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
     echo "<h1 style='color:blue;'>rslt is " .($number1*$number2)."</h1>";
}
if(isset($_POST['div']))
{
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    if($number2!=0)
    {
     echo "<h1 style='color:blue;'>rslt is " .($number1/$number2)."</h1>";
    }
    else
    {
     echo "number/0 Not possible";
    } 
}
?>
<br>
<button style=" font-size: 28px;
    border-radius: 15px;
    color: blue;" onClick="history.back()">back</button>