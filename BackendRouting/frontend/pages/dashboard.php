<?php
if (!isset($_SESSION) && !headers_sent()) {
    session_start();
}
$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-user-dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Icon Script  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<body>
    <!-- Top Bar Row -->
    <div class="top-bar">
        <div class="icon">
            <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div id="page-title">
            <a href="<?php echo $root ?>/home">SoftDrinks</a>
        </div>
        <!-- Responsive top bar  -->
        <div class="shop-list-icon">
            <span class="iconify" data-icon="bx:list-ul"></span>
            <div class="list-items-responsive">
                <a href="<?php echo $root ?>/trending">Trending</a>
                <a href="<?php echo $root ?>/products">Products</a>
                <a href="<?php echo $root ?>/recipes">Recipes</a>
                <a href="<?php echo $root ?>/favorites">Favorites</a>
            </div>
        </div>
        <!-- Actual top bar buttons -->
        <div class="list-items">
            <a href="<?php echo $root ?>/trending">Trending</a>
            <a href="<?php echo $root ?>/products">Products</a>
            <a href="<?php echo $root ?>/recipes">Recipes</a>
            <a href="<?php echo $root ?>/favorites">Favorites</a>
        </div>
        <!-- Top-bar - Search Bar -->
        <div class="search-container">
            <form action="<?php echo $root ?>/products?method=search" method="post">
                <input type="text" name="search" placeholder="Search...">
                <input type="submit" name="submit-from-search-bar">
            </form>
        </div>
        <!-- User Icon Button -->
        <div class="user-icon">
            <a href="<?php echo $root ?>/profile">
                <span id="user-iconify" class="iconify" data-icon="iconoir:profile-circled"></span>
            </a>
        </div>
    </div>


    <!-- Group Modal -->
    <div id="group-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
                <div class="information-content">
                    <h2>Group Title</h2>
                    <h3>Participants</h3>
                    <div class="user-list">
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
                            <div class="profile-bottom">
                                <div class="profile-bottom-name">
                                    <p class="profile-name">Group User 6</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-card">
                            <img class="image-profile" src="frontend/images/user/profile.jpg" alt="Profile Picture">
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
    <!-- TODO Change Email Modal -->
    <!-- TODO Change Password Modal -->

    <!-- Main Container -->
    <div class="page-container" id="id-page-container">
        <div class="dashboard-structor" id="id-dashboard-structor">
            <div class="user">
                <div class="profile-img">
                    <img src="frontend/images/user/profile.jpg" alt="Avatar">
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
                            <img alt="future prototype" id="user-content" src="frontend/images/prototype1.png">
                            <img alt="future prototype" id="group-content" style="display: none" src="frontend/images/prototype2.png">
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
                    <img src="frontend/images/user/profile.jpg" alt="Avatar">
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

    <!-- Footer Pages -->
    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/terms">Terms</a>
            <a href="<?php echo $root ?>/blogs">Blogs</a>
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
            <a href="<?php echo $root ?>/privacy">Privacy</a>
        </div>
    </footer>

<!-- Scripts  -->
    <!-- Profile Left slider for Responsive -->
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!-- Shopping List script -->
    <script src="frontend/scripts/shoppinglistScript.js"></script>
    <!-- Buttons Percentages script -->
    <script src="frontend/scripts/percentagesScript.js"></script>
    <!-- Group & Change Email & Change Pwd Modals -->
    <script src="frontend/scripts/dashboardModal.js"></script>
</body>
</html>
