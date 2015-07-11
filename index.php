<?php
spl_autoload_register(function ($class) {
    include $class . '.inc';
});
include_once 'vendor/autoload.php';

$PageTitle = "Home";
?>
<!doctype html>
<html lang="en">
<?php include_once 'display_header.php'; ?>
<body class="container k_style">
<?php include_once("display_analytics_tracking.php");
include_once("display_navigation_bar.php") ?>
<?php
if (isset($course_unsafe_url_input)) {
    if (isset($type_unsafe_url_input) && $type_unsafe_url_input == "syllabus") {
        include_once "display_syllabus.php";
    }
    if (isset($type_unsafe_url_input) && $type_unsafe_url_input == "assignments") {
        include_once "display_assignment.php";
    }
    if (isset($type_unsafe_url_input) && $type_unsafe_url_input == "file") {
        include_once "display_file.php";
    }
} else {
    include_once "display_home.php";
}
?>
</body>
</html>