<?php include('partials-front/menu.php'); ?>

<section class="categories">
    <h2 class="text-center text-uppercase mt-5">Explore Tech</h2>
    <div class="container mb-4">
        <div class="row mt-5">

            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                        <a href="<?= SITEURL; ?>category-foods.php?category_id=<?= $id; ?>">
                            <div class="card bg-dark">
                                <?php
                                if ($image_name == "") {
                                ?>
                                    <img class="img-fluid" src="assets/images/dafault/dafault.jpeg">
                                <?php
                                } else {
                                    //Image Available
                                ?>
                                    <img src="<?= SITEURL; ?>images/category/<?= $image_name; ?>" alt="Pizza" class="img-fluid">
                                <?php
                                }
                                ?>
                                <div class="">
                                    <h4 class="my-2 text-uppercase text-center text-white"><?= $title; ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>

            <?php
                }
            } else {
                echo "<div class='error'>Category not found.</div>";
            }
            ?>
        </div>
    </div>
</section>
<!-- Categories Section Ends Here -->


<?php include('partials-front/footer.php'); ?>