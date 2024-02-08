<?php
include 'database.php';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
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
