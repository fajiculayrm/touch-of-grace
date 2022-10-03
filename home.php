<?php include 'inc/header.php'; ?>

<link rel="stylesheet" href="css/home.css">

<title>Home</title>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>

    <main>
        <div class="bg-img">
        </div>

        <!-- Profile -->
        <section class="profile" id="profile">
            <img src="images/profile/Profile Picture.png" alt="Profile Image">
            <div class="profile-data">
                <h1>John Doe</h1>
                <div>
                    <p>Age: 22</p>
                    <p>Male</p>
                    <p>09123456789</p>
                </div>
                <p>Address: Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <button id="edit-profile">Edit Profile</button>
            </div>
            <!-- Edit Profile Modal -->
            <div class="profile-modal" id="profile-modal">
                <div class="profile-modal-content" id="profile-modal-content">
                    <span class="close">&times;</span>
                    <div class="bg-img"></div>
                    <img src="images/profile/Profile Picture.png" alt="Profile Image">
                    <h1>Edit Profile</h1>
                    <form action="submit">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="email" placeholder="Email">
                        <input type="number" placeholder="Age">
                        <div class="filter-gender">
                            <div class="active">Male</div>
                            <div>Female</div>
                        </div>
                        <div class="bday">
                            <label for="birthday">Birthday:</label>
                            <input type="date" id="birthday" name="birthday">
                        </div>
                        <input type="tel" placeholder="Contact Number">
                        <input type="text" placeholder="Address">
                        <!-- <label>Marital Status:</label>
                    <select name="status" id="status">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                        <option value="divorced">Divorced</option>
                        <option value="seperated">Seperated</option>
                    </select>

                    <div class="work-school">
                        <input type="text" placeholder="Work Experience">
                        <label for="start">Start</label>
                        <input type="date">
                        <label for="end">End</label>
                        <input type="date">

                    </div> -->
                        <input type="submit">
                    </form>
                </div>
            </div>
        </section>

        <!-- Functions -->
        <section class="functions" id="functions">
            <button id="create-account">Create Account</button>
            <!-- Create Account Modal -->
            <div class="create-modal" id="create-modal">
                <div class="create-modal-content" id="create-modal-content">
                    <span class="close">&times;</span>
                    <div class="bg-img"></div>
                    <form action="submit">
                        <h1>Create Account</h1>
                        <input type="email" placeholder="Email">
                        <select name="role" id="role">
                            <option value="" disabled selected>Role</option>
                            <option value="pastor">Pastor</option>
                            <option value="activity">Activity</option>
                            <option value="primary">Primary Leader</option>
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

                        <input type="submit" value="Add Leader">
                    </form>
                </div>
            </div>
            <button id="submit-report">Submit Report</button>
            <!-- Submit Report Modal -->
            <div class="submit-modal" id="submit-modal">
                <div class="submit-modal-content" id="submit-modal-content">
                    <span class="close">&times;</span>
                    <div class="bg-img"></div>
                    <form action="submit">
                        <h1>Submit Report</h1>

                        <div class="date">
                            <label for="date">Date:</label>
                            <input type="date" id="date">
                        </div>

                        <div class="time">
                            <label for="time">Time:</label>
                            <input type="time" id="time">
                        </div>

                        <input type="text" placeholder="Activity">

                        <input type="text" placeholder="Venue">

                        <input type="text" placeholder="Topic">

                        <label for="attendance">Attendance</label>
                        <div class="attendance" id="attendance">
                            <div>
                                <label for="adult">Adults:</label>
                                <input type="number" id="adult">
                            </div>
                            <div>
                                <label for="children">Children:</label>
                                <input type="number" id="children">
                            </div>
                            <div>
                                <label for="youth">Youth:</label>
                                <input type="number" id="youth">
                            </div>
                            <div>
                                <label>Total:</label>
                                <label>Total Number</label>
                            </div>
                        </div>

                        <input type="text" placeholder="Facilitator">

                        <input type="text" placeholder="Speaker">

                        <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Notes"></textarea>

                        <input type="submit" value="Submit Report">
                    </form>
                </div>
            </div>
            <button id="generate-report">Generate Report</button>
            <!-- Generate Report Modal -->
            <div class="generate-modal" id="generate-modal">
                <div class="generate-modal-content" id="generate-modal-content">
                    <span class="close">&times;</span>
                    <div class="bg-img"></div>
                    <form action="submit">
                        <h1>Generate Report</h1>

                        <div>
                            <div class="date">
                                <label for="date">From:</label>
                                <input type="date" id="date">
                            </div>

                            <div class="date">
                                <label for="date">To:</label>
                                <input type="date" id="date">
                            </div>
                        </div>

                        <select name="report-type" id="report-type">
                            <option value="" disabled selected>Report type</option>
                            <option value="attendance">Attendance</option>
                            <option value="cell">Cell</option>
                            <option value="ministry">Ministry</option>
                        </select>

                        <div class="filter-gender">
                            <div class="active">All</div>
                            <div>Male</div>
                            <div>Female</div>
                        </div>

                        <div class="checkbox">
                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>

                            <div>
                                <input type="checkbox" id="">
                                <label for="">Lorem</label>
                            </div>
                        </div>

                        <input type="submit" value="Generate Report">
                    </form>
                </div>
            </div>
        </section>

        <section class="functions" id="functions">
            <button id="cell-report">Cell Report</button>
            <!-- Cell Report Modal -->
            <div class="cell-modal" id="cell-modal">
                <div class="cell-modal-content" id="cell-modal-content">
                    <span class="close1">&times;</span>
                    <div class="bg-img"></div>
                    <form action="submit">
                        <h1>Cell Report</h1>

                        <div class="date">
                            <label for="date">Date:</label>
                            <input type="date" id="date">
                        </div>

                        <div class="time">
                            <label for="time">Time:</label>
                            <input type="time" id="time">
                        </div>

                        <input type="text" placeholder="Activity">

                        <input type="text" placeholder="Venue">

                        <input type="text" placeholder="Topic">

                        <label for="attendance">Attendance</label>
                        <div class="attendance" id="attendance">
                            <div>
                                <label for="adult">Adults:</label>
                                <input type="number" id="adult">
                            </div>
                            <div>
                                <label for="children">Children:</label>
                                <input type="number" id="children">
                            </div>
                            <div>
                                <label for="youth">Youth:</label>
                                <input type="number" id="youth">
                            </div>
                            <div>
                                <label>Total:</label>
                                <label>Total Number</label>
                            </div>
                        </div>

                        <input type="text" placeholder="Facilitator">

                        <input type="text" placeholder="Speaker">

                        <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Notes"></textarea>

                        <input type="submit" value="Cell Report">
                    </form>
                </div>
            </div>
            <button id="ministry-report">Ministry Report</button>
            <!-- Submit Report Modal -->
            <div class="ministry-modal" id="ministry-modal">
                <div class="ministry-modal-content" id="ministry-modal-content">
                    <span class="close1">&times;</span>
                    <div class="bg-img"></div>
                    <form action="submit">
                        <h1>Ministry Report</h1>

                        <div class="date">
                            <label for="date">Date:</label>
                            <input type="date" id="date">
                        </div>

                        <div class="time">
                            <label for="time">Time:</label>
                            <input type="time" id="time">
                        </div>

                        <input type="text" placeholder="Activity">

                        <input type="text" placeholder="Venue">

                        <input type="text" placeholder="Topic">

                        <label for="attendance">Attendance</label>
                        <div class="attendance" id="attendance">
                            <div>
                                <label for="adult">Adults:</label>
                                <input type="number" id="adult">
                            </div>
                            <div>
                                <label for="children">Children:</label>
                                <input type="number" id="children">
                            </div>
                            <div>
                                <label for="youth">Youth:</label>
                                <input type="number" id="youth">
                            </div>
                            <div>
                                <label>Total:</label>
                                <label>Total Number</label>
                            </div>
                        </div>

                        <input type="text" placeholder="Facilitator">

                        <input type="text" placeholder="Speaker">

                        <textarea name="notes" id="notes" cols="30" rows="10" placeholder="Notes"></textarea>

                        <input type="submit" value="Ministry Report">
                    </form>
                </div>
            </div>
            <button id="add-disc">Add</button>
            <!-- Add Disc Modal -->
            <div class="add-modal" id="add-modal">
                <div class="add-modal-content" id="add-modal-content">
                    <span class="close1">&times;</span>
                    <div class="bg-img"></div>
                    <form action="submit">
                        <h1>Add Disciple</h1>

                        <input type="text" placeholder="First Name">

                        <input type="text" placeholder="Last Name">

                        <div class="bday">
                            <label for="birthday">Birthday:</label>
                            <input type="date" id="birthday" name="birthday">
                        </div>

                        <input type="number" placeholder="Age">

                        <input type="tel" placeholder="Contact">


                        <div class="filter-gender">
                            <div class="active">Male</div>
                            <div>Female</div>
                        </div>

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

                        <input type="submit" value="Add Disciple">
                    </form>
                </div>
            </div>
        </section>

        <!-- Trainings -->
        <section class="trainings" id="trainings">

            <section>
                <div class="training-card" id="life-training">
                    <div>
                        <img src="images/training icon/Life Class.png" alt="Life Class">
                        <p>12</p>
                    </div>
                    <h2>Life Class</h2>
                </div>

                <div class="training-card" id="basic-training">
                    <div>
                        <img src="images/training icon/Basic Icon.png" alt="Basic">
                        <p>43</p>
                    </div>
                    <h2>Basic</h2>
                </div>

                <div class="training-card" id="sol1-training">
                    <div>
                        <img src="images/training icon/Sol 1 Icon.png" alt="Sol 1">
                        <p>44</p>
                    </div>
                    <h2>Sol 1</h2>
                </div>

                <div class="training-card" id="sol2-training">
                    <div>
                        <img src="images/training icon/Sol 2 Icon.png" alt="Sol 2">
                        <p>12</p>
                    </div>
                    <h2>Sol 2</h2>
                </div>

                <div class="training-card" id="sol3-training">
                    <div>
                        <img src="images/training icon/Sol 3 Icon.png" alt="Sol 3">
                        <p>32</p>
                    </div>
                    <h2>Sol 3</h2>
                </div>
            </section>

            <section>
                <div class="training-card" id="advance-training">
                    <div>
                        <img src="images/training icon/advance.png" alt="Advance">
                        <p>44</p>
                    </div>
                    <h2>Advance</h2>
                </div>


                <div class="training-card" id="specialized-training">
                    <div>
                        <img src="images/training icon/special.png" alt="Specialized">
                        <p>44</p>
                    </div>
                    <h2>Specialized</h2>
                </div>


                <div class="training-card" id="cell-training">
                    <div>
                        <img src="images/training icon/Cell Group Icon.png" alt="Cell Group">
                        <p>32</p>
                    </div>
                    <h2>Cell Group</h2>

                </div>
            </section>

            <section>
                <div class="training-card" id="baptism-training">
                    <div>
                        <img src="images/training icon/Baptism Icon.png" alt="Baptism">
                        <p>12</p>
                    </div>
                    <h2>Baptism</h2>
                </div>

                <div class="training-card" id="weddings-training">
                    <div>
                        <img src="images/training icon/Wedding Icon.png" alt="Weddings">
                        <p>17</p>
                    </div>
                    <h2>Weddings</h2>

                </div>

                <div class="training-card" id="cd-training">
                    <div>
                        <img src="images/training icon/C.D.png" alt="C.D">
                        <p>17</p>
                    </div>
                    <h2>C.D</h2>
                </div>
            </section>
        </section>


        <section class="modals">
            <!-- Life Class Training Modal -->
            <div class="life-modal" id="life-modal">
                <div class="life-modal-content" id="life-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Life Class</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Date Started</th>
                                    <th>Contact Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doi</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                                <tr>
                                    <td>John Dee</td>
                                    <td>14</td>
                                    <td>4 August 2021</td>
                                    <td>09123456789</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Life Class Training Modal End -->

            <!-- Basic Training Modal -->
            <div class="basic-modal" id="basic-modal">
                <div class="basic-modal-content" id="basic-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Basic</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <!-- <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Date Started</th>
                    <th>Contact Number</th>
                </tr>
            </table> -->
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Basic Training Modal End -->

            <!-- Sol1 Training Modal -->
            <div class="sol1-modal" id="sol1-modal">
                <div class="sol1-modal-content" id="sol1-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Sol 1</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Sol 1 Training Modal End -->

            <!-- Advance Training Modal -->
            <div class="advance-modal" id="advance-modal">
                <div class="advance-modal-content" id="advance-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Advance</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <!-- <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Date Started</th>
                    <th>Contact Number</th>
                </tr>
            </table> -->
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- AdvanceTraining Modal End -->

            <!-- Sol2 Training Modal -->
            <div class="sol2-modal" id="sol2-modal">
                <div class="sol2-modal-content" id="sol2-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Sol 2</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Sol 2 Training Modal End -->

            <!-- Specialized Training Modal -->
            <div class="specialized-modal" id="specialized-modal">
                <div class="specialized-modal-content" id="specialized-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Specialized</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <!-- <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Date Started</th>
                    <th>Contact Number</th>
                </tr>
            </table> -->
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Specialized Training Modal End -->


            <!-- Sol3 Training Modal -->
            <div class="sol3-modal" id="sol3-modal">
                <div class="sol3-modal-content" id="sol3-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Sol 3</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Sol 3 Training Modal End -->

            <!-- Cell Group Training Modal -->
            <div class="cell-training-modal" id="cell-training-modal">
                <div class="cell-training-content" id="cell-training-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Cell Group</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>

                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Cell Group Training Modal End -->

            <!-- Baptism Training Modal -->
            <div class="baptism-modal" id="baptism-modal">
                <div class="baptism-modal-content" id="baptism-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Baptism</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Baptism Training Modal End -->

            <!-- Weddings Training Modal -->
            <div class="weddings-modal" id="weddings-modal">
                <div class="weddings-modal-content" id="weddings-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>Weddings</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <tr>
                                <th>Couple</th>
                                <th>Date</th>
                                <th>Venue</th>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                            <tr>
                                <td>John Doi & Jonnna Doe</td>
                                <td>4 August 2021</td>
                                <td>Lorem Ipsum</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Weddings Training Modal End -->

            <!-- CD Training Modal -->
            <div class="cd-modal" id="cd-modal">
                <div class="cd-modal-content" id="cd-modal-content">
                    <span class="close-train">&times;</span>
                    <div class="bg-img"></div>
                    <h1>C.D</h1>
                    <select name="batch" id="batch">
                        <option value="batch" disabled selected>Batch</option>
                        <option value="batch101">Batch 101</option>
                        <option value="batch102">Batch 102</option>
                        <option value="batch103">Batch 103</option>
                        <option value="batch104">Batch 104</option>
                        <option value="batch105">Batch 105</option>
                    </select>
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Date Started</th>
                                <th>Contact Number</th>
                            </tr>
                            <tr>
                                <td>John Doi</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>14</td>
                                <td>4 August 2021</td>
                                <td>09123456789</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- CD Training Modal End -->
        </section>

        <section class="primary-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Date Started</th>
                    <th>Contact Number</th>
                    <th>Ministry</th>
                    <th>Training</th>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>4 August 2021</td>
                    <td>14</td>
                    <td>4 August 2021</td>
                    <td>09123456789</td>
                    <td>Lorem Impsum</td>
                    <td>Training</td>
                </tr>

            </table>
        </section>

    </main>
    <script src="js/home.js"></script>
    <?php include 'inc/footer.php'; ?>