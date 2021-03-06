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
    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <h2>Your Group</h2>
                    <h3>Participants</h3>
                    <div class="user-list">
                        <p>No participants here.</p>
                    </div>
                </div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="page-container" id="id-page-container">
        <div class="dashboard-structor" id="id-dashboard-structor">
            <div class="user">
                <div class="profile-img">
                    <img src="frontend/images/user/profile.jpg" alt="Avatar">
                </div>
                <div class="user-description">
                    <p><b>Hi User!</b></p>
                    <button id="group-btn" class="group-button">Your Group</button>
                    <form method="post" action="<?php echo $root ?>/logout">
                        <button class="group-button" name="change-password">Logout</button>
                    </form>
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
                            <!-- CATEGORIES FORM -->
                            <form>
                                <div class="form-row">
                                    <div class="col-25">
                                        <label>First category</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="category-select1" name="category-select1">
                                            <option value="Carbonated Drinks">Carbonated Drinks</option>
                                            <option value="Coffee Drinks">Coffee Drinks</option>
                                            <option value="Dairy Drinks">Dairy Drinks</option>
                                            <option value="Energy Drinks">Energy Drinks</option>
                                            <option value="Hot Beverages">Hot Beverages</option>
                                            <option value="Iced Beverages">Iced Beverages</option>
                                            <option value="Non Alcoholic">Non Alcoholic</option>
                                            <option value="Water">Water</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-25">
                                        <label >Second category</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="category-select2" name="category-select2">
                                            <option value="Carbonated Drinks">Carbonated Drinks</option>
                                            <option value="Coffee Drinks">Coffee Drinks</option>
                                            <option value="Dairy Drinks">Dairy Drinks</option>
                                            <option value="Energy Drinks">Energy Drinks</option>
                                            <option value="Hot Beverages">Hot Beverages</option>
                                            <option value="Iced Beverages">Iced Beverages</option>
                                            <option value="Non Alcoholic">Non Alcoholic</option>
                                            <option value="Water">Water</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-25">
                                        <label>Third category</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="category-select3" name="category-select3">
                                            <option value="Carbonated Drinks">Carbonated Drinks</option>
                                            <option value="Coffee Drinks">Coffee Drinks</option>
                                            <option value="Dairy Drinks">Dairy Drinks</option>
                                            <option value="Energy Drinks">Energy Drinks</option>
                                            <option value="Hot Beverages">Hot Beverages</option>
                                            <option value="Iced Beverages">Iced Beverages</option>
                                            <option value="Non Alcoholic">Non Alcoholic</option>
                                            <option value="Water">Water</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button onclick="saveFileTxt()" name="category-submit-btn" type="submit" id="id-categories-btn" class="save-bttn">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Preferences div  -->
                    <div class="percentages-structor">
                        <div class="buttons">
                            <button id="allergens-btn" class="allergens-percentages-btn" onclick="changeDisplayAllergens()">Allergens Products</button>
                            <button id="nutriscore-btn" class="nutriscore-percentages-btn" onclick="changeDisplayNutriscore()">Nutriscore Products</button>
                        </div>
                        <div id="chart-wrap">
                            <canvas id="chartAllergens"></canvas>
                            <canvas id="chartNutriscore" style="display: none"></canvas>

                            <button id="save-img" class="save-bttn" onclick="saveImg()">Save as Image</button>
                            <button id="save-csv" class="save-bttn">Save as CSV</button>
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
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
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
    <!-- Buttons Percentages script + Save categories into .txt -->
    <script src="frontend/scripts/percentagesScript.js"></script>
    <!-- Group & Change Email & Change Pwd Modals -->
    <script src="frontend/scripts/dashboardModal.js"></script>
</body>
</html>
