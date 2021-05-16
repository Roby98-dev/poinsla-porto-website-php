<?php include('partials-front/menu.php'); ?>
<?php include('partials-front/nav.php'); ?>

<section class="porto-search text-center bg-secondary py-5">
    <div class="container">
        <?php $search = $_POST['search']; ?>
        <h2 class="text-white">Your Search For: <p class="text-white mt-1">"<?= $search; ?>"</p>
        </h2>
    </div>
</section>

<section class="project bg-dark pt-4 pb-4">
    <div class="container">
        <div class="row justify-content-center">

            <?php

            $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%' ORDER BY id DESC";

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
                        <div class="card text-center project-items">
                            <div class="card-body">
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
                                <h4 class="card-title text-uppercase text-light mt-3"><?= $title; ?></h4>
                                <p class="card-text text-secondary">
                                    <?= $description; ?>
                                </p>
                                <a href="<?= $price; ?>" class="btn btn-primary mt-4">Visit now!</a>
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