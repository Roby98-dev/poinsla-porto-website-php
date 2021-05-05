<section class="categories">
    <h2 class="text-center text-uppercase mt-4 mb-3">Tech I Use</h2>
    <div class="container pb-5">
        <div class="row">

            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 4";

            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if ($count > 0) {

                while ($row = mysqli_fetch_assoc($res)) {

                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="col-lg-3 col-md-12 col-sm-12 mt-3 d-flex justify-content-center">
                        <a class="hover" href="<?= SITEURL; ?>category-foods.php?category_id=<?= $id; ?>">
                            <div class="tech-card card bg-light shadow">
                                <div class="card-body border border-info">
                                    <h4 class="title text-dark text-center text-uppercase mt-2 mb-2"><?= $title; ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class='alert alert-danger'>Category not Added.</div>
            <?php
            }
            ?>
        </div>
    </div>
</section>