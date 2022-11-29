<?php
    include 'includes/header.php';
    include 'conn/conn.php';
    echo get_header("Change Password");
    // session_start();

    if(isset($_POST['submit'])){

        $oldPassword = $_POST['oldpassword'];
        $newPassword = $_POST['newpassword'];
        $ncPassword = $_POST['ncpassword'];

        $user = $_SESSION['username'];

        $q1 = "SELECT password FROM 'login' WHERE username = `$user`";
        $result = mysqli_query($conn, $q1);
        while($row = $result->fetch_assoc())
        {
            if($oldPassword = $row['password'] && $newPassword = $ncPassword){
                $q = "UPDATE 'login'
                    SET password = $newPassword;
                    WHERE username = $user;
                ";
                mysqli_query($conn, $q);
            }
        }
        mysqli_free_result( $result );
    }




?>
                                <div class="card-body">
                                    <form method="POST">
                                        <div>
                                            <label for="oldPassword">Old Password</label> <br>
                                            <input class="w-100" type="password" name="oldpassword" id="" placeholder="Old Password">
                                        </div>
                                        <br>
                                        <div>
                                            <label for="newPassword">New Password</label> <br>
                                            <input class="w-100" type="password" name="newpassword" id="" placeholder="New Password">
                                        </div>
                                        <br>
                                        <div>
                                            <label for="confirmPassword">Confirm Password</label> <br>
                                            <input class="w-100" type="password" name="ncpassword" id="" placeholder="Confirm Password">
                                        </div>
                                        <br>
                                        <div>
                                            <button type="submit" name="submit" class="btn btn-success">Change Password</button>
                                        </div>
                                    </form>                                    
                                </div>

<?php
    include 'includes/footer.php';
    echo get_footer();
?>