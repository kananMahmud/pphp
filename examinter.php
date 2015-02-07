<?php

/*
 * interface example 
 */

interface Examinter {

    //put your code here
    public function info();
}

class dep implements Examinter {

    public function info()
    {
        echo 'How are you';
    }

}

class det implements Examinter {

    public function info()
    {
        echo '</br>';
        echo 'I am fine';
    }

}

$obj_dep = new dep;
$obj_dep->info();
$obj_det = new det;
$obj_det->info();
?>
