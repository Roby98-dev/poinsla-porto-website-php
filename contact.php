<?php include('partials-front/menu.php'); ?>
<?php include_once('partials-front/nav.php'); ?>

<section class="this-contact pt-5 pb-5 bg-dark text-light" id="contact ">
    <h2 class="text-uppercase text-center mb-4">Contact Me</h2>
    <div class="container">
        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <div class="row">
            <div class="contact-form col-lg-8 mx-auto">
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

<?php include('partials-front/footer.php'); ?>