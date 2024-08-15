<?php
session_start();
if(!isset($_SESSION['Id']))
{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">

</head>
<body>
    <div class="header">
        <h1>WELCOME TO ADMIN PANEL</h1>
        <!-- <form method="POST"> -->
        <a href="../action/logout.php"><button name="logout">Log Out</button></a>
        <!-- </form> -->
    </div>
</body>
</html>