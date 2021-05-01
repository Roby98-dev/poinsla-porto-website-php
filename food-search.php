<?php include('partials-front/menu.php'); ?>

<section class="porto-search text-center bg-primary py-5">
    <div class="container">
        <?php $search = $_POST['search']; ?>
        <h2 class="text-white">Your Search For: <p class="text-white mt-1">"<?= $search; ?>"</p>
        </h2>
    </div>
</section>

<section class="project pt-4 pb-4">
    <h2 class="text-center mt-5">Portfolio</h2>
    <div class="container">
        <div class="row justify-content-center">

            <?php

            $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 my-5 d-flex justify-content-center">
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
                                <h4 class="card-title"><?= $title; ?></h4>
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
                echo "<div class='alert alert-danger'>Food not found.</div>";
            }

            ?>
        </div>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>