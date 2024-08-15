<?php
//session_start();
include('connect.php');

if(isset($_GET['verify_token'])){
    $verify_token= $_GET['verify_token'];
    $verify_query= "SELECT verify_token,verify_status FROM users WHERE verify_token= '$verify_token' LIMIT 1";
    $verify_query_run= mysqli_query($con,$verify_query);

    if(mysqli_num_rows($verify_query_run)>0)
    {
        $rows= mysqli_fetch_array($verify_query_run);
        //echo $rows['verify_token'];
        if($rows['verify_status']==0)
        {
            date_default_timezone_set('Asia/Kolkata');
            ////$date=date(mm-dd-yyyy);
            //$date=date('h:i:sa');
            $clicked_token= $row['verify_token'];
            $update_query= "UPDATE users SET verify_status=1 WHERE 'email'='$email' AND verify_token='$clicked_token'";
            $update_query_run= mysqli_query($con, $update_query);

            if($update_query_run)
            {
                // $_SESSION['status']="Your account has been verified successful.!";
                // header("location:../");
                // exit(0);
                echo '<script>
                alert("Your account has been verified successful.!");
                window.location="../partials/index.php";
                </script>';
                exit(0);
                
            }
            else
            {
                // $_SESSION['status']="Verification failed.!";
                // header("location:../");
                // exit(0);
                echo '<script>
                alert("Verification failed.!");
                window.location="../partials/index.php";
                </script>';
                exit(0);
            }
        }
        else
        {
            // $_SESSION['status']="Email already verified. Please Login";
            // header("location:../");
            // exit(0);
            echo '<script>
            alert("Email already verified. Please Login");
            window.location="../partials/index.php";
            </script>';
            exit(0);
        }
    }
    else
    {
        // $_SESSION['status']="This token does not exist";
        // header("location:../");
        echo '<script>
        alert("This token does not exist");
        window.location="../partials/index.php";
        </script>';
    }
}
else
{
    // $_SESSION['status']="Not allowed";
    // header("location:../");
    echo '<script>
    alert("Not allowed");
    window.location="../partials/index.php";
    </script>';
}
?>
