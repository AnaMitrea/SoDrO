<?php
    $root = '/BackendRouting';
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
    <div class="admin-dashboard">
            <div class="dashboard-structor">
                <div class="user">
                    <div class="profile-img">
                        <img src="frontend/images/user/profile.jpg" alt="Avatar">
                    </div>

                    <div class="user-description">
                        <p>Your Name</p>
                        <p>Your Username</p>
                        <button class="change-email">Change Email</button>
                        <button class="change-password">Change Password</button>
                    </div>
                </div>
                <div class="admin-box">
                    <div class="options-box">
                        <div class="top-options">
                            <div class="options-frame">
                                    <img src="frontend/images/user/userwhitelist.png" class="icon-frame">
                                <div class="options-text">
                                     <p>Whitelist User</p>
                                </div>
                            </div>
                            <div class="options-frame">
                                    <img src="frontend/images/user/adduser.png" class="icon-frame">
                                <div class="options-text">
                                    <p>Add User</p>
                                </div>
                            </div>
                            <div class="options-frame">
                                    <img src="frontend/images/user/removeuser.png" class="icon-frame">
                                <div class="options-text">
                                    <p>Remove User</p>
                                </div>
                            </div>
                        </div>
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
</body>
</html>
