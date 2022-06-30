<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.svg" />
    <link rel="stylesheet" href="globalStyle.css">
    <link rel="stylesheet" href="style-user-dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Icon Script  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<body>
    <!-- Group Modal -->
    <div id="group-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="information-content">
                    <h2>Group Title</h2>
                    <h3>Participants</h3>
                    <div class="user-list">
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 6</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="../images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Change Email Modal -->
    <div id="email-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="email-pwd-container">
                <form action="../includes/change_email.inc.php" method="POST">
                    <div class="row">
                        <div class="col-40">
                            <label for="old_email">Old email</label>
                        </div>
                        <div class="col-60">
                            <input type="email" id="old_email" name="old_email" placeholder="Your old email..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-40">
                            <label for="new_email">New email</label>
                        </div>
                        <div class="col-60">
                            <input type="email" id="new_email" name="new_email" placeholder="Your new email..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-40">
                            <label for="confirm_email">Confirm new email</label>
                        </div>
                        <div class="col-60">
                            <input type="email" id="confirm_email" name="confirm_email" placeholder="Confirm email..">
                        </div>
                    </div>
                    <div class="row">
                        <button class="submit-btn" type="submit" name="change_email_submit">Sign up</button>
                    </div>
                </form>
                </div>
        </div>
    </div>
    <!-- Change Password Modal -->
    <div id="pwd-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="email-pwd-container">
                <form action="/change_pwd.php">
                    <div class="row">
                        <div class="col-40">
                            <label for="old_pwd">Old password</label>
                        </div>
                        <div class="col-60">
                            <input type="password" id="old_pwd" name="old_pwd" placeholder="Your old password..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-40">
                            <label for="new_pwd">New password</label>
                        </div>
                        <div class="col-60">
                            <input type="password" id="new_pwd" name="new_pwd" placeholder="Your new password..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-40">
                            <label for="confirm_pwd">Confirm new password</label>
                        </div>
                        <div class="col-60">
                            <input type="password" id="confirm_pwd" name="confirm_pwd" placeholder="Confirm password..">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="top-bar">
        <div class="icon">
            <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div id="page-title">
            <p>SoftDrinks</p>
        </div>

        <!-- Responsive top bar  -->
        <div class="shop-list-icon">
            <span class="iconify" data-icon="bx:list-ul"></span>
            <div class="list-items-responsive">
                <a href="../pages/trending.html">Trending</a>
                <a href="../pages/shop-page.html">Products</a>
                <a href="../pages/recipes/recipe1.html">Recipes</a>
                <a href="#">Favorites</a>
            </div>
        </div>
        <div class="list-items">
            <a href="../pages/trending.html">Trending</a>
            <a href="../pages/shop-page.html">Products</a>
            <a href="../pages/recipes/recipe1.html">Recipes</a>
            <a href="#">Favorites</a>
        </div>
        <div class="search-container">
            <form>
                <input type="search" placeholder="Search...">
            </form>
        </div>
        <div class="user-icon">
            <a href="../pages/dashboard.html">
                <span id="user-iconify" class="iconify" data-icon="iconoir:profile-circled"></span>
            </a>
        </div>
    </div>
    <div class="page-container" id="id-page-container">
        <div class="dashboard-structor" id="id-dashboard-structor">
            <div class="user">
                <div class="profile-img">
                    <img src="../images/user/profile.jpg" alt="Avatar">
                </div>

                <div class="user-description">
                    <p>Your Name</p>
                    <p>Your Username</p>
                    <button id="group-btn" class="group-button">Your Group</button>
                    <button id="email-btn" class="change-email">Change Email</button>
                    <button id="pwd-btn" class="change-password">Change Password</button>
                </div>
            </div>

            <!--  Responsive Open nav bar with account info-->
            <span id="span-openUser-btn"  onclick="openNav()">&#9776; View Profile Information</span>
            <!-- Preferences and Shopping List -->
            <div class="account-information">
                <div class="account-preferences">
                    <div class="preference-information">
                        <h1>Your preferences</h1>
                        <hr>
                        <div class="category-form">
                            <form>
                                <div class="form-row">
                                    <div class="col-25">
                                        <label>First category</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="category-select1" name="category-select">
                                            <option value="category1">Soda</option>
                                            <option value="category2">Tea</option>
                                            <option value="category3">Dairy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-25">
                                        <label >Second category</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="category-select2" name="category-select">
                                            <option value="category1">Your choice</option>
                                            <option value="category2">Your choice</option>
                                            <option value="category3">Your choice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-25">
                                        <label>Third category</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="category-select3" name="category-select">
                                            <option value="category1">Your choice</option>
                                            <option value="category2">Your choice</option>
                                            <option value="category3">Your choice</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Preferences div  -->
                    <div class="percentages-structor">
                        <div class="buttons">
                            <button id="user-preferences-bttn" class="user-percentages-bttn" onclick="changePreferences()">Percentages</button>
                            <button id="group-preferences-bttn" class="group-percentages-bttn" onclick="changePreferences()">Group Percentages</button>
                        </div>
                        <div id="chart-wrap">
                            <img alt="future prototype" id="user-content" src="../images/prototype1.png">
                            <img alt="future prototype" id="group-content" style="display: none" src="../images/prototype2.png">
                            <button class="save-bttn">Save your preferences</button>
                        </div>
                    </div>
                </div>
                <!-- Shopping List  -->
                <div class="account-shopping-list">
                    <h1>
                        Shopping List
                        <span class="iconify" data-icon="akar-icons:cart" style="color: white;"></span>
                    </h1>
                    <hr>

                    <div class="shp-list">
                        <div class="wrapper">
                            <div class="item-input">
                                <div class="iconify-menu">
                                    <span class="iconify" data-icon="ci:menu-alt-03" style="color: gray;"></span>
                                </div>

                                <input type="text" placeholder="Add a new item">
                            </div>
                            <div class="controls">
                                <div class="filters">
                                    <span class="active" id="all">All</span>
                                </div>
                                <button class="clear-btn">Clear All</button>
                            </div>
                            <ul class="item-box"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fullscreen Overlay Nav Div  -->
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <!-- <a href="#">About</a> -->
            <div class="user">
                <div class="profile-img">
                    <img src="../images/user/profile.jpg" alt="Avatar">
                </div>

                <div class="user-description">
                    <p>Your Name</p>
                    <p>Your Username</p>
                    <button class="group-button">Your Group</button>
                    <button class="change-email">Change Email</button>
                    <button class="change-password">Change Password</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="../../footer-pages/terms.html">Terms</a>
            <a href="../../footer-pages/blogs.html">Blogs</a>
            <a href="../../footer-pages/about.html">About</a>
            <a href="../../footer-pages/contact.html">Contact</a>
            <a href="../../footer-pages/privacy.html">Privacy</a>
        </div>
    </footer>

<!-- Scripts  -->
    <!-- Nav bar script -->
    <script src="navBarScript.js"></script>
    <!-- Shopping List script -->
    <script src="shoppinglistScript.js"></script>
    <!-- Buttons Percentages script -->
    <script src="percentagesScript.js"></script>
    <!-- Group & Change Email & Change Pwd Modals -->
    <script src="dashboardModal.js"></script>
</body>
</html>