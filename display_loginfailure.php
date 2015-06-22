<!doctype html>
<html lang="en">
<head>
    <?php $PageTitle = "Failure" ?>
    <?php include_once "display_header.php" ?>
</head>
<body>
<?php include_once("display_analytics_tracking.php") ?>
<?php include_once("display_navigation_bar.php") ?>
<article class="col-md-8">
    <h1>Paul Loree</h1>

    <p>
        We could not authenticate you based on the information you provided. Please <a href="display_login.php">go
            back</a>
        and try again. Your local IP address <?php echo $_SERVER['REMOTE_ADDR'] ?> may have been logged for
        quality and security purposes.
    </p>
    <img src="resources/OMFG-Cat.jpg"/>
</article>
<hr/>
</body>
</html>
