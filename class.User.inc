<?php

/**
 * Created by PhpStorm.
 * User: minot_000
 * Date: 6/17/2015
 * Time: 1:10 PM
 */
class User
{
    public $id;
    public $name;
    public $password;
    public $attempt_count;
    public $last_attempt;

    function set_name($unsafe_input_name)
    {
        $this->name = htmlspecialchars(trim($unsafe_input_name));
    }

    function set_password($unsafe_input_password)
    {
        $plain_text_password = addslashes($unsafe_input_password);
        $this->password = password_hash($plain_text_password, PASSWORD_BCRYPT);
    }

    function verify_password($unsafe_input_password)
    {
        $attempt_datetime = new DateTime('NOW', new DateTimeZone('UTC'));
        if (password_verify(addslashes($unsafe_input_password), $this->password)) {
            $this->attempt_count = 0;
            return true;
        } else {
            $this->attempt_count += 1;
            $this->last_attempt = clone $attempt_datetime;
            return false;
        }
    }
}