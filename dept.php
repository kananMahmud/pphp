<?php

/*
 * inheritance exm
 */

class Dept {

    public $dep_name;
    public $dep_room;
    public $dep_student;
    public $dep_teacher;

    public function show($name, $room, $student, $teacher)
    {
        $this->dep_name = $name;
        $this->dep_room = $room;
        $this->dep_student = $student;
        $this->dep_teacher = $teacher;
    }

}

?>
