<header class="navbar">
    <a href="./home.php">
        <img src="images/logo-whole.png" alt="">
    </a>
    <nav>
        <ul>
            <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <li class="<?= ($activePage == 'home') ? 'active1' : ''; ?>">
                <a href="./home.php">
                    <img src="images/navbar/home tab.png" alt="">
                    Home
                </a>
            </li>
            <li class="<?= ($activePage == 'pastors') ? 'active2' : ''; ?>">
                <a href="./pastors.php">
                    <img src="images/navbar/pastor tab.png" alt="">
                    Pastors
                </a>
            </li>
            <li class="<?= ($activePage == 'primary') ? 'active3' : ''; ?>">
                <a href="./primary.php">
                    <img src="images/navbar/primary tab.png" alt="">
                    Primary
                </a>
            </li>
            <li class="<?= ($activePage == 'ministry') ? 'active4' : ''; ?>">
                <a href="./ministry.php">
                    <img src="images/navbar/ministry tab.png" alt="">
                    Ministry
                </a>
            </li>
            <li>
                <a href="./login.php">
                    <img src="images/navbar/logout tab.png" alt="">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</header>