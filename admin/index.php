<?php
include('partials/menu.php');

//Sql Query 
$sql = "SELECT * FROM tbl_category";
//Execute Query
$res = mysqli_query($conn, $sql);
//Count Rows
$count = mysqli_num_rows($res);

//Sql Query 
$sql2 = "SELECT * FROM tbl_food";
//Execute Query
$res2 = mysqli_query($conn, $sql2);
//Count Rows
$count2 = mysqli_num_rows($res2);

//Sql Query 
$sql3 = "SELECT * FROM tbl_order";
//Execute Query
$res3 = mysqli_query($conn, $sql3);
//Count Rows
$count3 = mysqli_num_rows($res3);
?>

<!-- Main Content Section Starts -->
<div class="container">
    <h1 class="text-center mt-5 mb-5">Dashboard</h1>

    <?php
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
    ?>

    <div class="row mt-5 mb-5">
        <div class="col-lg-4 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-5">
                <h1>
                    <?= $count; ?>
                </h1>
                <p>Categories</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-5">
                <h1>
                    <?= $count2; ?>
                </h1>
                <p>Foods</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-5">
                <h1>
                    <?= $count3; ?>
                </h1>
                <p>Total Order</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>