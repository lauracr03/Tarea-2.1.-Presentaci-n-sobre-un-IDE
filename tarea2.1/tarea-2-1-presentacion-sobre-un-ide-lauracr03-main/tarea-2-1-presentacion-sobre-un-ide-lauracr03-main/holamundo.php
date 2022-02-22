<?php


class HolaMundo {

    function Saluda($name) {
        echo "Hola " . $name;
        echo " y hola mundo.";
    }
}

$obj = new HolaMundo();

$obj->Saluda("Quique");