<?php
    $root = '/BackendRouting';
if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<!--suppress ALL -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/adminStylesheet.css">
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
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
            <form method="post" action="shop-page-after-sort.php">
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
    <div class="page-container" id="id-page-container">
        <div class="dashboard-structor" id="id-dashboard-structor">
            <div class="user">
                <div class="profile-img">
                    <img src="frontend/images/user/profile.jpg" alt="Avatar">
                </div>
                <div class="user-description">
                    <p><?php echo $_SESSION['email']?></p>
                    <p>Your Username</p>
                    <button id="email-btn" class="change-email">Change Email</button>
                    <button id="pwd-btn" class="change-password">Change Password</button>
                    <button id="logout" class="change-password">Logout</button>
                </div>
            </div>

            <!--  Responsive Open nav bar with account info-->
            <span id="span-openUser-btn"  onclick="openNav()">&#9776; View Profile Information</span>
            <!-- Admin Functionalities with Forms -->
            <div class="account-information">
                <div class="account-preferences">
                    <div class="options-box">
                        <div class="top-options">
                            <div class="options-frame">
                                <img src="frontend/images/user/adduser.png" id="adduser" class="icon-frame">
                                <div class="options-text">
                                    <button id="addbutton" class="functions-button">Add User</button>
                                </div>
                            </div>
                            <div class="options-frame" id="removeuserbutton">
                                <img src="frontend/images/user/removeuser.png" id="removeuser" class="icon-frame">
                                <div class="options-text">
                                    <button id="removebutton" class="functions-button">Remove User</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="adduser-form" id="add-user-form">
                        <div class="container">
                            <form action="<?php echo $root?>/profile?admin=true&method=add" id="adduser" method="post">
                                <div class="row">
                                    <h2>Add an user to the database.</h2>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="username" name="username" placeholder="Enter the username..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="email" name="email" placeholder="Enter the email..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="Password">Password</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="password" id="password" name="password" placeholder="Enter the user's password..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="dateofbirth">Date of Birth</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" id="dateofbirth" name="dateofbirth" class="input" placeholder="Date Of Birth" />
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <input type="submit" name="submit-add" value="Add user">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="adduser-form" id="remove-user-form">
                        <div class="container">
                            <form action="<?php echo $root?>/profile?admin=true&method=remove" id="removeuser" method="post">
                                <div class="title">
                                    <h2>Remove an user from the database.</h2>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="username">Email</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="email" name="email" placeholder="Enter the email..">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <input type="submit" name="submit-remove" value="Remove user">
                                </div>
                            </form>
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

    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <!-- Footer pages -->
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/terms">Terms</a>
            <a href="<?php echo $root ?>/blogs">Blogs</a>
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
            <a href="<?php echo $root ?>/privacy">Privacy</a>
        </div>
    </footer>
    <script src="frontend/scripts/adminModals.js"></script>
</body>
</html>
