<?php
function __autoload($class_name)
{
    include_once 'class.' . $class_name . '.inc';
    include_once 'vendor/autoload.php';
    include_once 'oci_connect.php';
}

$PageTitle = "Home";
?>
<!doctype html>
<html lang="en">
<?php include_once 'display_header.php'; ?>
<body>
<?php
include_once("display_analytics_tracking.php");
include_once("display_navigation_bar.php");
?>
<div class="container">
    <form action="display_admin.php" method="post">
        <p>
            <input type="text" name="k_username" placeholder="Username" autofocus="autofocus">
        </p>

        <p>
            <input type="password" name="k_password" placeholder="Password">
        </p>

        <p>
            <button type="submit" class="btn btn-default">Authenticate</button>
        </p>
    </form>
    <?php
    if (isset($_POST['k_username']) && isset($_POST['k_password'])) {
        $admin_user = new User();
        $admin_user->set_name($_POST['k_username']);
        $admin_user->set_password($_POST['k_password']);
        var_dump($admin_user);
    }
    ?>
</div> <!-- /container -->
</body>
</html>