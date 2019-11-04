<?php
/**
 * Created by PhpStorm.
 * User: inf.krojl0110
 * Date: 26/10/2019
 * Time: 08:14
 */
    $min = $_REQUEST["key1"];

    $max = $_REQUEST["key2"];

    $nNumeri = $_REQUEST["key3"];

    $jsonp = "[";

    $jsond = "[";

    for($cntJson=0; $cntJson<$nNumeri; $cntJson++){

        $n = rand($min, $max);


        if($n%2==0) {
            $jsonp = $n. ", ";
        }else {
            $jsond = $n . ", ";
        }


    }

    $jsonp = $jsonp . "]";

    $jsond = $jsond . "]";

    echo $json;
?>