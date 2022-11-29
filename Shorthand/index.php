<?php
error_reporting(0);
    include 'includes/header.php';
    session_start(); 
    echo get_header("Home");

?>



                                <div class="card-body row">
                                    <div class="col-3">
                                        <div class="text-dark">Name</div>
                                        <div class="text-secondary"><?php echo $_SESSION['name'] ?></div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-dark">Mobile</div>
                                        <div class="text-secondary"><?php echo $_SESSION['mobile'] ?></div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-dark">Email</div>
                                        <div class="text-secondary"><?php echo $_SESSION['email'] ?></div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-dark">Address</div>
                                        <div class="text-secondary"><?php echo $_SESSION['address'] ?></div>
                                    </div>
                                </div>

                                <?php
                                    if ($_SESSION['username'] == "Admin" || $_SESSION['username'] == "admin") {
                                ?>

                                    <div class="text-center py-3">
                                        <button class="btn btn-info"><a href="upload_material.php" class="td-none text-light">Upload material</a></button>
                                    </div>

                                <?php
                                    }
                                ?>


<?php
    include 'includes/footer.php';
    echo get_footer();
?>