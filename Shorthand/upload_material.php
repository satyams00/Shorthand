<?php

include 'conn/conn.php';
      // FOR AUDIO FILE 
// if(isset($_POST['upload'])){
//     // $size = $_FILES['file']['size']/1024;
//     echo '<pre>';
//     print_r($_FILES);
// }
if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $date = $_POST['date'];
  $content = $_POST['content'];

  $q = "INSERT INTO `upload_material`(`title`, `date`, `content`) VALUES ('$title','$date','$content')";
  $resq = mysqli_query($conn, $q);
  if($resq){
    echo "<script>alert('Data saved succesfully..............')</script>";
  }
}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Upload Material</h2>
        </div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="title">Title</label> <br>
            <input class="w-100" type="text" name="title" placeholder="Title"> <br> <br>
            <label for="date">Date</label> <br>
            <input class="w-100" name="date" type="date"> <br> <br>
            <label for="audio">Audio file</label> <br>
            <input type="file" name="file">
            <input type="submit" name="upload" value="upload">
            <br> <br>
            <label for="content">Content</label> <br>
            <textarea class="w-100" name="content" id="content" cols="30" rows="10"></textarea> <br> <br>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
