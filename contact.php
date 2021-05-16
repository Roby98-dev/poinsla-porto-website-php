<?php include('partials-front/menu.php'); ?>
<?php include_once('partials-front/nav.php'); ?>

<section class="this-contact pt-5 pb-5 bg-dark text-light" id="contact ">
    <h2 class="text-uppercase text-center mb-4">Contact Me</h2>
    <div class="container">
        <div class="row">
            <div class="contact-form col-lg-8 mx-auto">
                <form id="contact-form">
                    <div class="form-group">
                        <input type="hidden" name="contact_number">
                    </div>
                    <div class="form-group mb-3">
                        <label>Name:</label>
                        <input class="form-control" type="text" name="from_name">
                    </div>
                    <div class="form-group mb-3">
                        <label>Email:</label>
                        <input class="form-control" type="email" name="to_name">
                    </div>
                    <div class="form-group mb-3">
                        <label>Message:</label>
                        <textarea class="form-control" name="message"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-lg btn-primary" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>