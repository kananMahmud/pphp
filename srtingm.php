<?php

class Stringm {

    function fine($sen)
    {
        $cuword = array("Bangladesh", "Homeland", "our");
        $reword = array("***gladesh", "***eland", "**r");
        $mword = str_ireplace($cuword, $reword, $sen);
        return $mword;
    }

}

?>
