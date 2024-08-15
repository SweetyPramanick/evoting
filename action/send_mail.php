<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//xyz
require '../vendor/autoload.php';  // Make sure this path is correct for your project
include('connect.php');
include('email.php');

function sendVerificationEmail($fullname, $email, $verify_token)
{
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rajeshsingh7903538124@gmail.com'; // Your Gmail address
        $mail->Password = 'qmrrdecasjsxkeio'; // Your Gmail App Password (or a generated app password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('rajeshsingh7903538124@gmail.com', 'TEST VERIFICATION'); // Set your "From" email address
        $mail->addAddress($email); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Email Verification';
        $mail->Body    = "<h2>You have successfully registered</h2>
                          <h3>Verify your email to login using the link below:</h3>
                          <br/>
                          <a href='http://localhost/vendor1/action/verify_email.php?verify_token=$verify_token'>Click here to verify your email</a>";

        $mail->send();
        echo 'Verification email has been sent.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $folder = "../uploads/" . $image;
    $std = $_POST['std'];

    // Check if email already exists
    $check_email_query = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (!$check_email_query_run) {
        // Query failed, output the error
        echo "Error: " . mysqli_error($con);
    } elseif (mysqli_num_rows($check_email_query_run) > 0) {
        // Email already exists
        echo '<script>
            alert("Email already exists.");
            window.location="../partials/registration.php";
            </script>';
    } else {
        // Proceed with registration
        $verify_token = md5(rand());
        sendVerificationEmail($fullname, $email, $verify_token);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($tmp_name, $folder)) {
            // Insert the user into the database
            $query = "INSERT INTO users (fullname, mobile, email, password, verify_token, photo, standard, status, votes) 
                      VALUES ('$fullname', '$mobile', '$email', '$password', '$verify_token', '$folder', '$std', 0, 0)";
            $query_run = mysqli_query($con, $query);

            if ($query_run) {
                // Registration successful
                echo '<script>
                    alert("Registration successful! Please verify your email.");
                    window.location="../partials/index.php";
                    </script>';
            } else {
                // Query failed
                echo "Error: " . mysqli_error($con);
                echo '<script>
                    alert("Registration failed!");
                    </script>';
            }
        } else {
            // File upload failed
            echo '<script>
                alert("File upload failed!");
                </script>';
        }
    }
}
?>
