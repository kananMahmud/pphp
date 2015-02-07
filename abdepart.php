<?php

abstract class Abdepart {

    //put your code here
    public abstract function depinfo();
    public abstract function depcom();

    public function info()
    {
        echo '</br>';
        echo 'Another function in abstract';
    }

}

class Depswe extends Abdepart {

    public function depinfo()
    {
        echo 'Software Engineering Department of Daffodil International university';
        echo '</br>';
    }
    public function depcom()
    {
        echo '</br>';
        echo 'another main abs example';;
    }

}

class Depcse extends Abdepart {

    public function depinfo()
    {
        echo '</br>';
        echo 'computer science and Engineering Department of Daffodil Intenational University';
    }
    public function depcom()
    {
        echo '</br>';
        echo 'another abs example in main ';;
    }

    public function show()
    {
        echo '</br>';
        echo 'Its work';
    }

}

$swe = new Depswe;
$swe->depinfo();
$swe->depcom();
$swe->info();
$cse = new Depcse;
$cse->depinfo();
$swe->depcom();
$cse->show();
$cse->info();
?>
