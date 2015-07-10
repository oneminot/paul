<?php

/**
 * Created by PhpStorm.
 * User: kusha_000
 * Date: 7/9/2015
 * Time: 5:03 PM
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    function __autoload($class_name)
    {
        include_once 'class.' . $class_name . '.inc';
        include_once 'vendor/autoload.php';
    }

    public function test_verify_password_works()
    {
        $my_password = "fh7ZVHma7tVEGKafmd99gybmOHK39as7qgtBJFySImIZHF0OIBjnv7Q4SnBZf96";
        $admin_user = new User();
        $admin_user->set_password($my_password);
        $admin_user->attempt_count = 0;
        $admin_user->last_attempt = new DateTime('yesterday', new DateTimeZone('UTC'));
        $this->assertTrue($admin_user->verify_password($my_password));
    }
}
