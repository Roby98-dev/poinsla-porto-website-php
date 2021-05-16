<!-- Skills section start -->
<section id="skills" class="pt-5 pb-5 bg-dark">
    <h2 class="text-uppercase text-center mb-0">My Skills</h2>
    <div class="container">
        <div class="row mt-5">

            <?php
            $sql = "SELECT * FROM tbl_skills WHERE active = 'Yes' ORDER BY id DESC LIMIT 6";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $percent = $row['percent'];
                    $active = $row['active'];
            ?>

                    <div class="col-lg-6 col-md-12 col-sm-12 text-light">
                        <div class="card shadow card-skills mb-2">
                            <div class="card-body text-uppercase">
                                <h5 class="mt-3 mb-2"><?= $title; ?></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $percent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $percent; ?>%;"><?= $percent; ?>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class='alert alert-danger'>Skills not available.</div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- Skills section end -->