<section class="project pt-4 pb-4">
    <h2 class="text-center text-uppercase">Portfolio</h2>
    <div class="container">
        <div class="row mt-5">

            <?php

            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            if ($count2 > 0) {
                //Food Available
                while ($row = mysqli_fetch_assoc($res2)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                        <div class="card">
                            <?php
                            if ($image_name == "") {
                            ?>
                                <img class="card-img-top img-fluid" src="assets/images/dafault/dafault.jpeg">
                            <?php
                            } else {
                            ?>
                                <img src="<?= SITEURL; ?>images/food/<?= $image_name; ?>" alt="Chicke Hawain Pizza" class="card-img-top img-responsive">
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
                ?>
                <div class='alert alert-danger'>Food not available.</div>
            <?php
            }

            ?>
        </div>
    </div>

    <p class="text-center">
        <a href="<?= SITEURL; ?>foods.php">See All My Work</a>
    </p>
    </div>
</section>