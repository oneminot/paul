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
        $user_input_password = htmlspecialchars($_POST['k_password']);
        $user_input_username = htmlspecialchars(trim($_POST['k_username']));
        $name_fields = '/[a-zA-Z\s]+/'; // alpha or spaces, at least 1 char
        $string = "Match this string";
        var_dump(filter_var($user_input_username, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/[a-zA-Z\s]+/'))));
        // let the salt be automatically generated
        $hashed_password = password_hash($_POST['k_password'], PASSWORD_BCRYPT);
        $admin_user = new User();
        $admin_user->password = $hashed_password;
        echo "<pre>" . var_export($admin_user, true) . "</pre>";
        if (password_verify(htmlspecialchars($user_input_password), $hashed_password)) {
            echo "password is valid";
        } else {
            echo "password is invalid";
        }
    }
    ?>
</div> <!-- /container -->
</body>
</html>