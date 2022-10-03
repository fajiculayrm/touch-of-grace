<?php include 'inc/header.php'; ?>

<link rel="stylesheet" href="css/pastors.css">

<title>Home</title>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>

    <main>
        <section class="banner">
            <img src="images/pastor-banner.png" alt="">
            <h1>Pastors</h1>
        </section>

        <section class="filter hidden-sm-up">
            <img src="images/Filter.png" alt="">
            <input type="search" placeholder="Search">
        </section>

        <section class="content">
            <div class="pastor-profile col-sm-12 col-md-6 col-lg-4" id="pastor-btn">
                <img src="images/profile/13237773_182720095456679_3941724484136261738_n.jpeg" alt="">
                <div>
                    <h1>John Does</h1>
                    <h2>Head of Ministry</h2>
                    <p>Lorem Ipsum</p>
                </div>
            </div>

            <!-- Pastor Modal -->
            <div class="pastor-modal" id="pastor-modal">
                <div class="pastor-modal-content" id="pastor-modal-content">
                    <img src="images/profile/13237773_182720095456679_3941724484136261738_n.jpeg" alt="Profile Image">
                    <div class="profile-data">
                        <h1>John Doe</h1>
                        <div>
                            <p>Age: 22</p>
                            <p>Male</p>
                            <p>09123456789</p>
                        </div>
                        <p>Address: Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- Pastor Modal End -->


            <div class="pastor-profile col-sm-12 col-md-6 col-lg-4">
                <img src="images/profile/174475877_2889604224643116_7927992593734428200_n.jpeg" alt="">
                <div>
                    <h1>John Does</h1>
                    <h2>Head of Ministry</h2>
                    <p>Lorem Ipsum</p>
                </div>
            </div>
        </section>
    </main>
    <script src="js/pastors.js"></script>
    <?php include 'inc/footer.php'; ?>