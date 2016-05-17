<?php
$course_unsafe_url_input = filter_input(INPUT_GET, "course");
$type_unsafe_url_input = filter_input(INPUT_GET, "type");
$k_site_url_prefix = ".";
$k_environment = "dev";
$file = 'visitors.txt'; 
$current = file_get_contents($file); 
$current  .= $_SERVER['REMOTE_ADDR']; 
$current .= "\t"; 
$current .= date('d/m/Y H:i:s'); 
$current .= "\n";  
file_put_contents($file, $current);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="google-site-verification" content="FZYurFk-XpJro76JOdMM8WhoxWaV8RlEK5cvKfZsMK8" />
    <title>
        Paul Loree
        <?php
        if (isset($PageTitle)) {
            echo " - " . $PageTitle;
        }
        ?>
    </title>

    <script src="<?php echo $k_site_url_prefix ?>/vendor/components/jquery/jquery.min.js"></script>
    <script src="<?php echo $k_site_url_prefix ?>/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $k_site_url_prefix ?>/vendor/twbs/bootstrap/dist/js/npm.js"></script>

    <script src="<?php echo $k_site_url_prefix ?>/resources/k_script.js"></script>

    <link rel="stylesheet"
          href="<?php echo $k_site_url_prefix ?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="<?php echo $k_site_url_prefix ?>/vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet"
          href="<?php echo $k_site_url_prefix ?>/resources/k_style.css">

    <link rel="shortcut icon" type="image/png" href="<?php echo $k_site_url_prefix ?>/resources/paul.png">
    <meta name="msapplication-TileColor" content="#424242"/>
    <meta name="msapplication-square150x150logo" content="/resources/paul.png"/>
</head>