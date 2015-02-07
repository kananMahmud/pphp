<?php

class Math {

    public function add($m, $o, $p) {
        $g = $m + $o + $p;
        return $g;
    }

    public function multi($a, $b) {
        $c = $a * $b;
        return $c;
    }

    public function sub() {
        
    }

}

$ope = new Math;
//echo $ope->add();
$m = $ope->multi(10, 30);
echo "add =" . $ope->add($m, 30, 40);

//echo "multi=" . $m;
?>