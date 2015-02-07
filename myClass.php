<?php

class MyClass {

    public $name = "kanan";
    public $age = 26;

    public function show()
    {
        $name = $this->name;
        $age = $this->age;
        return $name ."</br>". $age;
    }

}

$person = new MyClass;
echo $person->show();
?>
