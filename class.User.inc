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
        $plain_text_password = htmlspecialchars($unsafe_input_password);
        $this->password = password_hash($plain_text_password, PASSWORD_BCRYPT);
    }

    function verify_password($unsafe_input_password)
    {
        if (password_verify($unsafe_input_password, $this->password)) {
            return true;
        } else {
            return false;
        }
    }

}