<?php

include './dept.php';

/**
 * Description of sinfo
 *
 * @author ZOO
 */
class Sinfo extends Dept {

    //put your code here
    public $lab_no = 30;

    public function sshow() {
        $sweinfo = "";
        $sweinfo.=$this->dep_name;
        $sweinfo.='</br>';
        $sweinfo.=$this->dep_room;
        $sweinfo.='</br>';
        $sweinfo.=$this->dep_student;
        $sweinfo.='</br>';
        $sweinfo.=$this->dep_teacher;
        return $sweinfo;
    }

}

$objsinfo = new Sinfo();
$objsinfo->show('swe', 20, 500, 10);
echo $objsinfo->sshow();

echo '</br>';
echo "lab no " . $objsinfo->lab_no;
?>
