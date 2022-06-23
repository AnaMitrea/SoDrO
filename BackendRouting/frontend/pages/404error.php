<?php
if (!isset($_SESSION) && !headers_sent()) {
    session_start();
}
http_response_code(404);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Error 404</title>
    <link rel="stylesheet" href="frontend/stylesheets/style-error404.css">
</head>
<body>

<div class="err404">
        <img id="err404-img" src="frontend/images/404error_page/spilled_drink_man.svg" alt="Spilled drink">
        <a href='/BackendRouting/login'>Back to login page</a>
</div>

</body>
</html>