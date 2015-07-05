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
        $user_input = htmlspecialchars($_POST['k_password']);
        // let the salt be automatically generated
        $hashed_password = password_hash($_POST['k_password'], PASSWORD_BCRYPT);
        $admin_user = new User();
        $admin_user->password = $hashed_password;
        echo "<pre>" . var_export($admin_user, true) . "</pre>";
        if (password_verify($user_input, $hashed_password)) {
            echo "password is valid";
        } else {
            echo "password is invalid";
        }
    }
    ?>
</div> <!-- /container -->
</body>
</html>