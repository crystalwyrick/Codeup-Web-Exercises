<?php

class Input
{

    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if (isset($_REQUEST[$key]))
        {
            return true;
        }   return false;
    }

    public static function noInput ($key)
    {
        if (isset($_REQUEST[$key]) && $_REQUEST[$key] != '') {
            return true;
        }
    }
    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)) {
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

    public static function escape($input)
    {
        return htmlspecialchars(strip_tags($input));
    }

    public static function getString($key)
    {
        if(!self::noInput($key) || !is_string(self::get($key)) || is_numeric(self::get($key))) {
            throw new Exception ("$key must be a string!");
        }
        return self::get($key);
    }

    public static function getNumber($key)
    {
        if(!self::noInput($key) || !is_numeric(self::get($key)))
        {
            throw new Exception ("$key must be a number!");
        }
            return self::get($key);
    }

    public static function getDate($key)
    {
        $date = self::get($key);
        $d = new DateTime($date);
        return $d;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    // private function __construct() {}
}
