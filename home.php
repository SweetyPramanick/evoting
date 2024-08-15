<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="../css/style1.css" rel="stylesheet">

</head>
<body >
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Go Vote</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav_li">
          <a class="nav-a active" aria-current="page" href="#">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav_li">
          <a class="nav-a" href="../partials/index.php">Login</a>
        </li>
        <li class="nav_li">
          <a class="nav-a" href="../partials/registration.php">Register</a>
        </li>
        <!-- <li class="nav_li">
          <a class="nav-a" href="#">About</a>
        </li> -->
        </ul>
        
    </div>
    </div>
    </nav>
    </header>
    
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="bannerh1">Online Voting System</h1>
                    <p>Online voting systems are voting platforms used to securely conduct votes and elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person</p>
                    <a href="../partials/index.php"><button class="votingbtn">Vote Now</button></a>
                </div>
                <div class="col-md-6 mb-5">
                    <img src="../img/vote.jpeg" width="90%" height="400vh" alt="Banner Image">
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="mt-5 pt-5">
        <h1 class="text-center mt-5">Online Voting System</h1>
    </div> -->
</body>
</html>