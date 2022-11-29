<?php 
session_start();
function get_header($title){
    return '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>'.$title.'</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

    <div class="container-fluid">
        <header>
            <div class="navbar bg-primary mb-5">
                <div class="navbar-logo px-3">
                    <img src="img/logo.jpg" class="rounded" alt="logo" width="80px" height="60px">
                </div>
                <div class="nav-content px-2">
                    <div> <a href="logout.php" class="px-3 text-light text-decoration-none " style="font-size : 20px">Logout</a> </div>
                
                    
                </div>
                
            </div>
            <div class="after-nav py-2 px-4 d-flex justify-content-between bg-light">
                <div>' . $_SESSION['username'] . '</div>
                <div>Home > <a href="index.php"class="text-decoration-none">' . $_SESSION['username'] . ' profile</a></div>
            </div>
        </header>
        <main>
            <div class="main-body">
                <div class="row">
                    <div class="col-2">
                        <div class="card">
                            <div class="card-header text-center p-5">
                                <img src="img/satyam.jpg" alt="Profile Photo" class="rounded-circle img-fluid">
                                <label for="Username">' . $_SESSION['username'] . '</label><br>
                                <label for="studentid">Student Id:</label><br>
                                <label for="studentidno">'.$_SESSION['id'] .'</label>
                            </div>
                            <div class="card-body text-center">
                                <span>Admission Date: <br> '.$_SESSION['date'].'</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <div class="navbar navbar-expand-lg">
                                    <ul class="navbar-nav d-flex flex-row ">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link active">Student Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="hindiSteno.php" class="nav-link">Hindi Steno</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="englishSteno.php" class="nav-link">English Steno</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="specialDictation.php" class="nav-link">Special Dictation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link d-none">RSSB Exam</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link d-none">Fees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="changePassword.php" class="nav-link">Change Password</a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>';
}

