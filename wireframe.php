<?php
function __autoload($class_name)
{
    include_once 'class.' . $class_name . '.inc';
    include_once 'vendor/autoload.php';
    include_once 'oci_connect.php';
}

$PageTitle = "Wireframe";
?>
<!doctype html>
<html lang="en">
<?php include_once 'display_header.php'; ?>
<body>
<?php include_once("display_analytics_tracking.php");
include_once("display_navigation_bar.php") ?>
<?php
if (isset($type_unsafe_url_input) && $type_unsafe_url_input == "admin")
    include_once "display_admin.php";
?>
</body>
</html>