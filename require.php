<?php
$error   = null;
$data = $__POST;
$name    = $data['name'];
$phone   = $data['phone'];


if(isset($data['name'])){
    if(preg_match("/^[a-zA-Zа-яА-Я]",$data['name'])){
        print_r ('имя не верно.');
    }
    else echo "имя не верно";
}

if(isset($data['phone'])){
    if(preg_match("/^([+]?[0-9\s-\(\)]{3,25})*$/i",$data['phone'])){
        print_r( 'телефон верен.');
    }
    else echo "телефон не веерен";
}
?>