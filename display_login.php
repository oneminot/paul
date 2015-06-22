<!doctype html>
<html lang="en">
<head>
    <?php $PageTitle = "Login" ?>
    <?php include_once "display_header.php" ?>
</head>
<body>
<?php include_once("display_analytics_tracking.php") ?>
<?php include_once("display_navigation_bar.php") ?>
<article>
    <form action="display_loginfailure.php" method="post">
        <p><input name="username" placeholder="Enter your username here"></p>

        <p><input name="password" placeholder="Enter your password here"></p>

        <p><input type="submit" value="Authenticate"></p>
    </form>
</article>
</body>
</html>
