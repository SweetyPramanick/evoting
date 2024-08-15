<?php
session_start();
include('connect.php');

$email= $_POST['email'];
$otp= $_POST['user_otp'];
//$mobile= $_POST['mobile'];
$password= $_POST['password'];
//$verify_token= md5(rand());
$std= $_POST['std'];

//$sql= "SELECT * from users where email= '$email' and password= '$password'";
$sql= "SELECT * from users where user_otp='$otp'";
$result= mysqli_query($con,$sql);
//echo var_dump($result);
if(mysqli_num_rows($result)>0){
    //$otp=rand(11111,99999);
    $sql= "SELECT fullname, photo, votes, id from users where standard='group'";
    $resultgroup=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultgroup)>0){
        $groups= mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
        $_SESSION['groups']= $groups;
    }
    $data= mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['data']=$data;

    echo '<script>
    alert("You have successfully logged in.");
    window.location= "../partials/dashboard.php";
    </script>';

}else{
    echo '<script>
    alert("Invalid Credentials");
    window.location= "../partials/index.php";
    </script>';
}

?>
