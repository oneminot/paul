<?php

/**
 * Created by PhpStorm.
 * User: minot_000
 * Date: 6/17/2015
 * Time: 4:01 PM
 */
class Database
{
    private static $_instance;
    private $_connection;

    public function __construct()
    {
        $this->_connection = oci_connect('', '', 'localhost/XE');
    }

    /**
     * Get an instance of the database
     * @return Database
     */
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getConnection()
    {
        return $this->_connection;
    }

    private function __clone()
    {
    }
}