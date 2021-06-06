<nav class="navbar navbar-expand-lg ms-auto fixed-top navbar-dark bg-dark border-bottom border-success">
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
                    <a class="nav-link" href="<?= SITEURL; ?>"><i class="bx bx-home"></i> Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" aria-expanded="false" data-bs-toggle="dropdown" role="button" href="#">Offers</a>
                    <ul class="dropdown-menu bg-dark text-light">
                        <li class="dropdown-item">
                            <a href="<?= SITEURL; ?>categories.php">Web Development</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="<?= SITEURL; ?>portfolios.php">Web Disgn</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Internet Marketing</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" aria-expanded="false" data-bs-toggle="dropdown" role="button" href="#">Portfolio</a>
                    <ul class="dropdown-menu bg-dark text-light">
                        <li class="dropdown-item">
                            <a href="<?= SITEURL; ?>categories.php">Tech</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="<?= SITEURL; ?>portfolios.php">Works</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Projects</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= SITEURL; ?>contact.php"><i class="bx bx-phone"></i> Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= SITEURL; ?>admin/"><i class="bx bx-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>