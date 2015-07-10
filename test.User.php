<?php

/**
 * Created by PhpStorm.
 * User: kusha_000
 * Date: 7/9/2015
 * Time: 5:03 PM
 */

require_once "class.User.inc";
class UserTest extends \PHPUnit_Framework_TestCase
{
    const TOTAL_NUMBER_OF_ATTEMPTS_ALLOWED = 5;
    const TIME_BEFORE_ANOTHER_ATTEMPT_ALLOWED_IN_MINUTES = 2;
    public function test_verify_password_works()
    {
        $my_password = "fh7ZVHma7tVEGKafmd99gybmOHK39as7qgtBJFySImIZHF0OIBjnv7Q4SnBZf96";
        $admin_user = new User();
        $admin_user->set_password($my_password);
        $admin_user->attempt_count = 0;
        $admin_user->last_attempt = new DateTime('yesterday', new DateTimeZone('UTC'));
        $this->assertTrue($admin_user->verify_password($my_password));
    }

    public function test_verify_password_fails_if_attempt_count_exceeds_maximum()
    {
        $my_password = "fh7ZVHma7tVEGKafmd99gybmOHK39as7qgtBJFySImIZHF0OIBjnv7Q4SnBZf96";
        $admin_user = new User();
        $admin_user->set_password($my_password);
        $admin_user->attempt_count = 6;
        $admin_user->last_attempt = new DateTime('yesterday', new DateTimeZone('UTC'));
        $this->assertFalse($admin_user->verify_password($my_password));
    }
}
