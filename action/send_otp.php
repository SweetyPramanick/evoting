<?php
include("connect.php");
include("email.php");
$email=$_POST['email'];
$sql= "Select * from users where email='$email'";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0){
    $otp=rand(11111,99999);
    send_otp($email,"PHP OTP LOGIN",$otp);
    $sql="UPDATE users set user_otp='$otp' where email='$email'";
    $rs=mysqli_query($con,$sql) ;


    echo '<script>
    alert("Plz check your email for OTP and verify");
    var email="$email";
    window.location="../partials/validate_otp.php";
    </script>';
    //header("location:actions/verify.php?msg=Plz check your email for OTP and verify");
    //echo "Email found";
}
else{
    echo '<script>
    alert("Email is invalid... Plz check again");
    window.location="../partials/index.php";
    </script>';
    //header("location:index.php?msg=Email is invalid... Plz check again");
    //echo "Email not found";
}
?>
