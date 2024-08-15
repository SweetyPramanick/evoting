<!-- <?php
//$email=$_get['email'];
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
        
        <div class="bg-info py-4">
            
            <h2 class="text-center">Login with OTP</h2>
            <div class="container text-center">
                <form action="../action/verify_otp.php" method="POST">
                    

                    <div class="mb-3">
                        <input type="text" class="form-control w-50 m-auto" name="user_otp" placeholder="Enter 5 digit OTP" require="required">
                    </div>

                    
                    
                    <button type="submit" class="btn btn-dark my-4">Verify OTP</button>
                    <!-- <a href="../partials/dashboard.php" class="text-white"></a> -->
                </form>

            </div>
            
        </div>
</body>
</html>
