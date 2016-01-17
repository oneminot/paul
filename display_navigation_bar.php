<?php $k_course_page = "/index.php"; ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="index.php">
                Home
            </a>
            <a class="navbar-text" href="display_admin.php">
                Administrative Log in
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if (isset($course_unsafe_url_input) && $course_unsafe_url_input != "") : ?>
                    <li class="dropdown">
                        <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>"
                           class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo $course_unsafe_url_input ?>
                            <span class="caret"></span>;
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>&type=syllabus">
                                    Syllabus
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>&type=assignments">
                                    Assignments
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $k_site_url_prefix . $k_course_page ?>?course=<?php echo $course_unsafe_url_input ?>&type=files">
                                    Course files
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>