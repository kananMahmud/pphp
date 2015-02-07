<?php

class Tool {

    public $var_name = "Kanan";
    public $var_vill = "Thakurdulat Pur";
    public $var_po = "Bahadur Pur";
    public $var_ps = "Bheramara";
    public $var_dis = "Kushtia";
    public $var_con = "Bangladesh";

    public function show() {
        $data = "";
        $data .= $this->var_name;
        $data .= '</br>';
        $data .= $this->var_vill;
        $data .= '</br>';
        $data .= $this->var_po;
        $data .= '</br>';
        $data .= $this->var_ps;
        $data .= '</br>';
        $data .= $this->var_dis;
        $data .= '</br>';
        $data .= $this->var_con;
        return $data;
    }

}

$var_obj = new Tool;
echo $var_obj->show();

?>