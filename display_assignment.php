<?php $PageTitle = "Assignment" ?>
<?php
$course_unsafe_url_input = filter_input(INPUT_GET, "course");
$type_unsafe_url_input = filter_input(INPUT_GET, "type");
$assignment_id_unsafe_url_input = filter_input(INPUT_GET, "id");
?>
<!doctype html>
<html lang="en">
<?php include_once "display_header.php" ?>
<body>
<?php include_once("display_analytics_tracking.php") ?>
<?php include_once("display_navigation_bar.php") ?>
<?php if (isset($assignment_id_unsafe_url_input)) {
    echo $assignment_id_unsafe_url_input;
} ?>

</body>
</html>