<?php
$server="localhost";
$username="root";
$password="";
$database = "userdata";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  die("Error Detected".mysqli_error($conn));
}

if(isset($_POST['submit'])){
    $firstname=$_POST['first name'];
    $lastname=$_POST['last name'];
    $address=$_POST['address'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $country=$_POST['country'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $sql="select * from student where email='$email' and password='$password'";
    $que=mysqli_query($conn, $sql);
    if(mysqli_num_rows($que)> 0){
        echo "<script>alert('Login Successfull !!!')</script>";
        echo "<script>window.open('website/index.php', '_self')</script>";
    }
    else{
        echo "<script>alert('Please Enter Valid Email or Password')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }
    mysqli_close($conn);
}
?>