<?php
$_name="";
if(isset($_POST['submit'])){
  $_name = htmlspecialchars($_POST['name']);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="hero">
        <?php 
         if(!empty($_name))
         {
         echo "The user name is ".$_name;
         }
        else
        {
            echo "The user name is ";
        }
        ?>
    </h1>
    <div class="container">
       <div class="holder">
        <form action="index.php" method="POST">
            <div class="wreapper">
                <input type="text" placeholder="Enter user name" name="name">
            </div>
            <br>
            <div class="wreapper">
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
       </div> 
    </div>
    <br>
    <h4 class="footer"> Thanks for submiting your name. Now you become a user of out website</h4>
</body>
</html>