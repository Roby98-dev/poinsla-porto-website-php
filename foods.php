<?php include_once('partials-front/menu.php'); ?>
<?php include_once('search-index.php') ?>

<section class="projects pt-4 pb-4">
    <h2 class="text-center text-uppercase">Portfolio</h2>
    <div class="container">
        <div class="row mt-5">

            <?php
            $sql = "SELECT * FROM tbl_food WHERE active='Yes'";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                        <div class="card col-lg-4 col-md-12 col-sm-12 mb-3" style="width: 18rem;">
                            <?php
                            if ($image_name == "") {
                            ?>
                                <img class="card-img-top img-fluid" src="assets/images/dafault/dafault.jpeg">
                            <?php
                            } else {
                            ?>
                                <img src="<?= SITEURL; ?>images/food/<?= $image_name; ?>" alt="Chicke Hawain Pizza" class="card-img-top img-fluid">
                            <?php
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $title; ?></h5>
                                <p class="card-text text-secondary">
                                    <?= $description; ?>
                                </p>
                                <a href="<?= $price; ?>" class="btn btn-primary">Visit now!</a>
                            </div>
                        </div>
                    </div>

            <?php
                }
            } else {
                //Food not Available
                echo "<div class='error'>Food not found.</div>";
            }
            ?>





            <div class="clearfix"></div>



        </div>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>