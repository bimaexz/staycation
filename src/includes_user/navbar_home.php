
<?php
    $now = strval(basename($_SERVER['PHP_SELF'], '.php'));
    ?>
    <nav id="nav-home" class="navbar navbar-expand-lg position-fixed w-100 bg-transparent" style="z-index: 999;">
    <div class="container">
            <a class="navbar-brand d-flex align-items-center" href=".">
                <h1 class="logo my-auto">Stay<span class="sub-logo">cation.</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-row align-items-center">
                <li class="nav-item">
                    <form action="index.php?include=konfirmasi-search-user-page" method="post" class="search-icon d-flex flex-row justify-content-between align-items-center">
                        <input class="bg-transparent" type="text" placeholder="search by city" name="search">
                        <button type="submit" class="btn-search"><img src="assets/img/search-btn.svg" alt=""></button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= strcmp($now, 'home') == 0 ? ' active' : '' ?>" href="index.php?include=home">Home</a>
                </li>
                <?php
                    if(isset($_SESSION['id_user'])){?>
                        <li class="nav-item"><a class="nav-link <?= strcmp($now, 'profile') == 0 ? ' active' : '' ?>" href="index.php?include=profile">My Profile</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: var(--green)" href="index.php?include=sign-out">Sign Out</a></li>
                    <?php } else {?>
                        <li class="nav-item-sign"><a class="nav-link-sign" href="index.php?include=login">SignIn/SignUp</a></li>
                        <?php } ?>
            </ul>
            </div>
    </div>
    </nav>
    <script src="../assets/js/script.js"></script>