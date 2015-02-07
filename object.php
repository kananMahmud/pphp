<?php

class Home {

    public $name = "kanan";
    public $road_no = "15";
    public $city = "Dhaka";
    public $zip_code = "1207";
    public $country = "Bangladesh";
    public function show()
    {
        $add="";
        $add .= $this->name;
        $add .= '</br>';
        $add .= $this->road_no;
        $add .= '</br>';
        $add .= $this->city;
        $add .= '</br>';
        $add .= $this->zip_code;
        $add .= '</br>';
        $add .= $this->country;
        return $add;
    }

}

$address = new Home; //Object
echo $address->show();

?>