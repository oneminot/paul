<?php $PageTitle = "Course" ?>
<?php
$course_unsafe_url_input = filter_input(INPUT_GET, "course");
$type_unsafe_url_input = filter_input(INPUT_GET, "type");
?>
<!doctype html>
<html lang="en">
<?php include_once "display_header.php" ?>
<body>
<?php include_once("display_analytics_tracking.php") ?>
<?php include_once("display_navigation_bar.php") ?>
<article>
    <?php if ($type_unsafe_url_input == "syllabus") : ?>
        <?php include_once("display_syllabus.php") ?>
    <?php endif; ?>
    <?php if ($type_unsafe_url_input == "assignments") : ?>
        <h1>Assignments</h1>
        <?php for ($i = 1; $i <= 10; $i++) {
            echo 'Assignment #' . $i . '<br />';
        } ?>
    <?php endif; ?>
    <?php if ($type_unsafe_url_input == "files") : ?>
        <h1>Course Files</h1>
        <?php for ($i = 1; $i <= 6; $i++) {
            echo 'File #' . $i . '<br />';
        } ?>
    <?php endif; ?>
    <?php if ($type_unsafe_url_input != "assignments" || $type_unsafe_url_input != "syllabus" || $type_unsafe_url_input != "files") : ?>
        <?php if ($type_unsafe_url_input == "") : ?>
            <h1>{{Department Name}} {{Course Number}} - {{Course Name}}</h1>
            <ul class="list-group" role="tablist">
                <li class="list-group-item">
                    <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>&type=syllabus">
                        Syllabus
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>&type=assignments">
                        Assignments
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>&type=files">
                        Course files
                    </a>
                </li>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</article>
</body>
</html>