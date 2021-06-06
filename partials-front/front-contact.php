<?php include_once('../config/constants.php'); ?>

<!-- Contact -->
<section class="this-contact bg-dark pt-5 pb-5 bg-light " id="contact ">
    <h2 class="text-uppercase text-center mb-0">Contact Me</h2>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-4 text-light">
                <?php
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                ?>
                <div class="card shadow mx-4 my-4 card-address">
                    <div class="card-body">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Legong Keraton, Undisan Kelod, Tembuku, Bangli, Bali, Indonesia</p>
                        <p><i class="fas fa-envelope-open-text"></i> Roby@poinsla.xyz</p>
                        <p><i class="bx bxl-twitter"></i> @roby_hjz</p>
                        <p><i class="bx bxl-whatsapp"></i> +62 813-3755-9615</p>
                    </div>
                </div>
            </div>
            <div class="contact-form col-lg-6 mx-auto text-light">
                <form action="" method="POST" id="contact-form">
                    <div class="form-group mb-3">
                        <label>Name:</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group mb-3">
                        <label>Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group mb-3">
                        <label>Message:</label>
                        <textarea class="form-control" name="message" placeholder="Enter your messages"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-lg btn-primary" name="submit" type="submit" value="Send">
                    </div>
                </form>
            </div>

            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $sql = "INSERT INTO tbl_message SET 
                    name ='$name',
                    email = '$email',
                    message ='$message'
                ";

                $res = mysqli_query($conn, $sql);

                if ($res == true) {
                    $_SESSION['add'] = "<div class='alert alert-success'>Send message successfully.</div>";
            ?>
                    <script>
                        window.location = "index.php";
                    </script>
                <?php
                } else {
                    $_SESSION['add'] = "<div class='alert alert-danger'>Failed to send message.</div>";
                ?>
                    <script>
                        window.location = "index.php";
                    </script>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>