<?php
    include 'conn/conn.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $date = $_POST['date'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        if ($password == $cpassword) {
            $sql = "INSERT INTO `login`(`username`, `password`, `name`, `email`, `date`, `mobile`, `address`) VALUES ('$uname', '$password', '$name', '$email', '$date', '$phone', '$address')";
    
            $res = mysqli_query($conn,$sql);
            // echo "Data Submitted Succesfully";
            header('location: login.php');
        }
        else{
            echo "Confirm password is not matched!!!!!!!!!!!!!!";
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
            <div class="card col-4">
                <div class="card-header">
                    <h1>Sign Up</h1>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input class="w-100" name="name" type="text" placeholder="Name"> <br> <br>
                        <input class="w-100" name="email" type="text" placeholder="Email"> <br> <br>
                        <input class="w-100" name="uname" type="text" placeholder="Username"> <br> <br>
                        <input class="w-100" name="phone" type="text" placeholder="Phone number"> <br> <br>
                        <input class="w-100" name="address" type="text" placeholder="Address"> <br> <br>
                        <input class="w-100" name="date" type="date" placeholder="Date"> <br> <br>
                        <input class="w-100" name="password" type="password" placeholder="Password"> <br> <br>
                        <input class="w-100" name="cpassword" type="password" placeholder="Confirm Password"> <br> <br>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary " >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>




