<?php 
error_reporting(0);
include 'conn/conn.php';
session_start();

    $q2 = "SELECT * FROM upload_material WHERE date=date('Y-m-d')";    

    // $str = "This is me and you. I am here";
    // $str1 = "This is you and me.";
    // $arr = explode(" ", $str);
    // $arr1 = explode(" ", $str1);
    // // print_r($str);
    // // $cmp = strcmp($str, $str1);
    // // echo $cmp;
    

    // echo $c1." ".$c2;
     $id = $_SESSION['id'];
      if(isset($_POST['submit'])){
        // $correct = "25";
        // $wrong = "25";
        
        // $total = $_POST['total'];
        // $percent = $_POST['percent'];


        $q = "CREATE TABLE IF NOT EXISTS SHL2022$id (
          id int(11) NOT NULL AUTO_INCREMENT,
          content varchar(255),
          correct varchar(9),
          wrong varchar(9),
          total varchar(9),
          percent varchar(9),
          PRIMARY KEY(id)
        );";
        $res1 = mysqli_query($conn, $q);
        // $contentOfTheDay = mysqli_query($conn, $q2);
        $res2 = mysqli_query($conn, $q2);

        $row = mysqli_num_rows($res2);

        if ($row > 0) {
          while($row = $res2->fetch_assoc()) {
            $contentOfTheDay = $row['content'];
          }
        
          $arr = explode(" ", $contentOfTheDay);
          $arr1 = explode(" ", $content);

          $c1 =0;
          $c2=0;
          for ($i=0; $i < sizeof($arr); $i++) { 
            if($arr[$i] == $arr1[$i]){
              echo $arr[$i]. " ";
              $c1++;
            }
            else{
              echo "<del class='text-danger'>$arr[$i]</del>"." ";
              $c2++;
            }
          }


          if ($res1) {
            $total = "50";
            $percent = "50";
            $content = $_POST['content'];
            $correct = $c1;
            $wrong = $c2;

            
            $q1 = "INSERT INTO `shl2022$id`(`content`, `correct`, `wrong`, `total`, `percent`) VALUES ('$content','$correct','$wrong','$total','$percent')";
            $qres = mysqli_query($conn,$q1);
            // if($qres){
            //   echo "Hey there";
            // }else{
            //   echo "Out side";
            // }
          }
          // echo $id;

        } else {
          echo "Content of the day is not avilable...........";
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
        <h4 class="text-center text-primary">Contiguous Property at 105wpm</h4>
        <form action="" method="POST">
          <div class="card">
              <div class="card-body">
                  <h3>Enter Content : </h3>
                  <textarea name="content" class="p-3" cols="175" rows="10"></textarea>
              </div>
          </div>
          <div class="m-2">
              <button class="btn btn-danger w-50 offset-6" name="submit">Submit</button>
          </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html> 





