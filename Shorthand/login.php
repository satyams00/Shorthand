<?php
error_reporting(0);
  include 'conn/conn.php';

  session_start();

  if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    
    
    $sql = "SELECT * FROM `login` WHERE username = '$username' and password = '$password'";
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count = mysqli_num_rows($res);

    if ($res) {
      if ($count) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['date'] = $row['date'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['address'] = $row['address'];
        header("location: index.php");
      } else {
        echo "You have entered incorrect data.............";
      } 
    } 

    else{
      echo "Not found";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="slider">
                    <img src="img/logo.jpg" alt="sliderImg" width="900px" height="500px">
                </div>
            </div>
            <div class="col-4">
              <div class="card-header">
                <h1>Login Page</h1>
              </div>
              <div class="card-body">
                  <form action="" method="POST">
                    <input type="text" class="w-100" placeholder="Username" name="user"> <br> <br>
                    <input type="password" class="w-100" placeholder="Password" name="pass"> <br> <br>
                    <input type="checkbox" required> <label for="remember">Remenber me</label> <br> <br>
                    <button type="submit" class="btn btn-primary rounded rounded-pill  w-100" name="submit">Log In </button>
                    <div class="text-center">If you do  not have any account <a href="signup.php">Click here</a> </div>
                  </form>
                </div>
                <div class="text-center">
                    <label for="">Apply for admission --</label> <span class="text-danger">Admission here</span>
                    <div class="qrCde">
                        <img src="img/logo.jpg" alt="QR" width="200px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>




