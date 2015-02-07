<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function checknum($number)
{
    if($number>1){
        throw new Exception("value must be 1 or bellow");
    }
    return TRUE;
}
checknum(3);
?>
