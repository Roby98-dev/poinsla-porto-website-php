<section class="front-search bg-dark text-center">
    <ul class="social-media list-inline mt-3">
        <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.instagram.com/poinsla.xyz/">
                <i class="fab fa-instagram fa-fw"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://twitter.com/roby_hjz">
                <i class="fab fa-twitter fa-fw"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://github.com/Roby98-dev"><i class="fab fa-github fa-fw"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.linkedin.com/in/i-kadek-roby-adi-putra-6a473b161/">
                <i class="fab fa-linkedin fa-fw"></i>
            </a>
        </li>
    </ul>
    <div class="container pt-3 d-flex justify-content-center">
        <form class="shadow" action="<?= SITEURL; ?>food-search.php" method="POST">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" name="search" placeholder="Search for Portfolio.." required class="form-control" />
                </div>
                <button type="submit" name="submit" value="Search" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</section>