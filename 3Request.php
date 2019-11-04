<?php
/**
 * Created by PhpStorm.
 * User: inf.krojl0110
 * Date: 25/10/2019
 * Time: 12:07
 */

    //http://localhost:80/5Ainf/starting/3Request.php

    //Con parametro in GET
    //http://localhost:80/5Ainf/starting/3Request.php?key1=value1&key2=value2&key3=value3
    //queryString : ?key1=value1&key2=value2&key3=value3

    //$_REQUEST: vettore associativo creato in automatico quando carico la pagina
    //vettore associativo : l'indice e' una stringa
    $value1 = $_REQUEST["key1"];

    $value2 = $_REQUEST["key2"];

    $value3 = $_REQUEST["key3"];

    echo $value1 . "<br>";

    echo $value2 . "<br>";

    echo $value3;
?>