<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<html>

<head>
    <title> MedBuddy </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./home page images/medical-app1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body style="background:#f8f9fa;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./home/home.html" target='content'>
                <img src="./home page images/medical-app1.png" width="35" height="35" class="d-inline-block align-top"
                    alt="">
                MedBuddy
            </a>
            <div class="navbar-nav">
                <a class="nav-item nav-link " href="./vc/videoconsult.html" target='content'><img
                        src="./home page images/video.png" width="30" height="30">
                    &nbsp;Video Consult</a>
                <a class="nav-item nav-link " href="./online-shopping-site-master/index.html" target='content'><img
                        src="./home page images/medicine.png" width="30" height="30">
                    &nbsp;Buy Medicines</a>
                <a class="nav-item nav-link " href="./proj/medicine.html" target='content'><img
                        src="./home page images/labtest.png" width="30" height="30"> &nbsp;
                    Lab Tests</a>
                
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><span class="navbar-text">Hello, <?php echo $_SESSION['name']; ?> &nbsp;</span></li>
                <li><a class="btn btn-outline-dark" href="./final/logout.php">Logout</a></li>
            </ul>

        </div>

    </nav>


</body>

</html>

<?php 
}else{
     header("Location: ./final/index.php");
     exit();
}
 ?>