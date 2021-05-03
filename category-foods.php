    <?php include('partials-front/menu.php'); ?>

    <?php
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);

        $category_title = $row['title'];
    } else {
        header('location:' . SITEURL);
    }
    ?>

    <section class="food-search text-center">
        <div class="container">
            <h2>
                <p class="text-white">"<?= $category_title; ?>"</p>
            </h2>
        </div>
    </section>

    <section class="food-menu">
        <h2 class="text-center text-uppercase">Portfolio</h2>
        <div class="container">
            <div class="row d-flex justify-content-center my-5">

                <?php

                $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id";

                $res2 = mysqli_query($conn, $sql2);

                $count2 = mysqli_num_rows($res2);

                if ($count2 > 0) {

                    while ($row2 = mysqli_fetch_assoc($res2)) {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
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

    </section>

    <?php include('partials-front/footer.php'); ?>