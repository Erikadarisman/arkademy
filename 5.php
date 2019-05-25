<?php

function ganti_kata(string $str,$asal,$ganti){
    $kata = str_split($str);
    $panjang=count($kata);
    for ($i=0; $i < $panjang; $i++) {
        if ($kata[$i]==$asal) {
            $kata[$i]=$ganti;
        }
    } 
    echo implode("",$kata);
}

ganti_kata('purwakarta','a','o');

