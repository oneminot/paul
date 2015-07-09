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
    <form class="form-signin" action="display_admin.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="k_username" class="sr-only">Username</label>
        <input type="text" id="k_username" class="form-control" name="k_username" placeholder="Username" required
               autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="k_password" class="form-control" name="k_password" placeholder="Password" required>

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <?php
    if (isset($_POST['k_username']) && isset($_POST['k_password'])) {
        $admin_user = new User();
        $admin_user->id = 1;
        $admin_user->set_name($_POST['k_username']);
        $admin_user->set_password("fh7ZVHma7tVEGKafmd99gybmOHK39as7qgtBJFySImIZHF0OIBjnv7Q4SnBZf96");
        $admin_user->attempt_count = 0;
        $admin_user->last_attempt = new DateTime('yesterday', new DateTimeZone('UTC'));
        if ($admin_user->verify_password($_POST['k_password'])) {
            echo "success!";
        } else {
            echo "verification failed";
        }
        var_dump($admin_user);
    }
    ?>
</div> <!-- /container -->
</body>
</html>