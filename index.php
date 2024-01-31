<?php
$insert=false;
if(isset($_POST['name'])){
$server='localhost';
$username='root';
$password='';

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Not Connected to the server" .mysqli_connect_error());
}
else{
   // echo"Succesful Connect To the Database";
}

$Name = $_POST['name'];
$Age = $_POST['age'];
$Gender = $_POST['gender'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Other = $_POST['other'];

$sql="INSERT INTO `Project`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$Name', '$Age', '$Gender', '$Email', '$Phone', '$Other', current_timestamp());";
//echo "Done";

if($con->query($sql)==true){
   // echo "Succesfull Connected";
    $insert=true;
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Travel Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="IMG_20230104_082955.jpg" alt="SLC">
    <div class="container">
        <h1>Welcome To Shyam Lal College Travel Site</h1>
        <p>Please enter your details and submit your form here to participate in trip.</p>
        <?php
        if($insert==true){
        echo "<p class='sbm'>Thanks for the submmited the form. We are happy to see you there.</p>";
        }
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder=" Enter Your Name Here">
            <input type="text" name="age" id="age" placeholder=" Enter Your Age Here">
            <input type="text" name="gender" id="gender" placeholder=" Enter Your Gender Here">
            <input type="text" name="email" id="email" placeholder=" Enter Your Email Here">
            <input type="text" name="phone" id="phone" placeholder=" Enter Your Contact Number Here">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter other details you wanna be share">
            </textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>


