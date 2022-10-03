<?php include 'inc/header.php'; ?>

<link rel="stylesheet" href="css/home.css">

<title>Home</title>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>

    <main>
        <div class="bg-img"></div>
        <h1>Edit Profile</h1>
        <div class="edit-content">
            <div class="profile-pic">
                <img src="images/profile/Profile Picture.png" alt="Profile Image">
                <input type="file">
            </div>
            <form action="submit">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="email" placeholder="Email">
                <input type="number" placeholder="Age">
                <select name="gender" id="edit-gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="bday">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday">
                </div>
                <input type="tel" placeholder="Contact Number">
                <input type="text" placeholder="Address">
                <select name="status" id="status">
                    <option value="" selected disabled> Marital Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="widowed">Widowed</option>
                    <option value="divorced">Divorced</option>
                    <option value="seperated">Seperated</option>
                </select>
                <select name="training" id="training">
                    <option value="" disabled selected>Training</option>
                    <option value="basic">Basic</option>
                    <option value="life-class">Life Class</option>
                    <option value="sol1">Sol 1</option>
                    <option value="sol2">Sol 2</option>
                    <option value="sol3">Sol 3</option>
                    <option value="cell-group">Cell Group</option>
                </select>
                <label>Ministry</label>
                <div class="checkbox">
                    <div>
                        <input type="checkbox" id="academy">
                        <label for="academy">Academy</label>
                    </div>

                    <div>
                        <input type="checkbox" id="media">
                        <label for="media">Media</label>
                    </div>

                    <div>
                        <input type="checkbox" id="music">
                        <label for="music">Music</label>
                    </div>

                    <div>
                        <input type="checkbox" id="none">
                        <label for="none">None</label>
                    </div>

                    <div>
                        <input type="checkbox" id="dance">
                        <label for="dance">Dance</label>
                    </div>

                    <div>
                        <input type="checkbox" id="techical">
                        <label for="techical">Technical</label>
                    </div>

                    <div>
                        <input type="checkbox" id="secritariat">
                        <label for="secretariat">Secritariat</label>
                    </div>

                    <div>
                        <input type="checkbox" id="decoration">
                        <label for="decoration">Decoration</label>
                    </div>

                    <div>
                        <input type="checkbox" id="finance">
                        <label for="finance">Finance</label>
                    </div>

                    <div>
                        <input type="checkbox" id="intercessory">
                        <label for="intercessory">Intercessory</label>
                    </div>

                    <div>
                        <input type="checkbox" id="touch-kids">
                        <label for="touch-kids">Touch Kids</label>
                    </div>

                    <div>
                        <input type="checkbox" id="touch-down">
                        <label for="touch-down">Touch Down</label>
                    </div>

                    <div>
                        <input type="checkbox" id="food-services">
                        <label for="food-services">Food Services</label>
                    </div>

                    <div>
                        <input type="checkbox" id="trasportation">
                        <label for="transportation">Transportation</label>
                    </div>

                    <div>
                        <input type="checkbox" id="services&support">
                        <label for="services&support">Services & Support</label>
                    </div>
                </div>
                <input type="submit" value="Save Edit">
                <input class="delete" type="submit" value="Delete">
                <button>Go Back</button>
            </form>
        </div>
        </section>