<section class="project bg-dark pt-4 pb-4">
    <h2 class="text-center text-uppercase">Portfolio</h2>
    <div class="container">
        <div class="row mt-5">

            <?php

            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 6";

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
                        <div class="card project-items shadow text-center">
                            <?php
                            if ($image_name == "") {
                            ?>
                                <img class="card-img-top px-3 py-3 img-fluid rounded" src="assets/images/dafault/dafault.jpeg">
                            <?php
                            } else {
                            ?>
                                <img src="<?= SITEURL; ?>images/food/<?= $image_name; ?>" alt="Chicke Hawain Pizza" class="card-img-top px-3 py-3 rounded">
                            <?php
                            }
                            ?>
                            <div class="card-body">
                                <h5 class="card-title text-light"><?= $title; ?></h5>
                                <p class="card-text text-secondary">
                                    <?= $description; ?>
                                </p>
                                <a href="<?= $price; ?>" class="btn btn-primary mt-3">Visit now!</a>
                            </div>
                        </div>
                    </div>

                <?php
                }
            } else {
                ?>
                <div class='alert alert-danger'>Portfolio not available.</div>
            <?php
            }

            ?>
        </div>
    </div>

    <div>
        <p class="text-center mt-5">
            <a class="btn btn-primary shadow" href="<?= SITEURL; ?>portfolios.php">See All My Work</a>
        </p>
    </div>
</section>