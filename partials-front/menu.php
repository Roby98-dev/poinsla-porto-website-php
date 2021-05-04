<?php include('config/constants.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='<?= SITEURL; ?>assets/images/poinsla-icon.JPG' type='image/x-icon' />

    <title>Poinsla | Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="<?= SITEURL; ?>assets/css/main-front.css?v=<?= time(); ?>">
    <link rel="stylesheet" href="<?= SITEURL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITEURL; ?>assets/fonts/css/all.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg ms-auto navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand logo" href="<?= SITEURL; ?>" title="Logo">
                <img src="images/logo-poinsla.png" alt="Restaurant Logo" class="img-fluid img-responsive">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITEURL; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITEURL; ?>categories.php">Tech I Use</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITEURL; ?>foods.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITEURL; ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>