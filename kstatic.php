<?php

/*
 * static example
 * 
 */

class Kstatic {

    //put your code here
    public static $depname;
    public static $deplocation;
    public static $depstudent;

    public static function info($name, $location,$stdent)
    {
        self::$depname = $name;
        self::$deplocation = $location;
        self::$depstudent=$stdent;
        echo 'Department name : ' . self::$depname;
        echo '</br>';
        echo 'Location : ' . self::$deplocation;
        echo '</br>';
        echo 'Number of student : '.self::$depstudent;
        echo '</br>';
    }

}

Kstatic::info('Software Engineering', 'Dhanmondi Dhaka',500);
echo Kstatic::$depname;

