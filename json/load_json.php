<?php
/**
 * Created by M. Muflikh Kholidin, S.Kom
 * Scala and Web Developer
 *
 * muflic.24@gmail.com
 *
 * https://github.com/mufl1c
 * https://bitbucket.org/mufl1c
 */
$json_decode = json_decode($json);
$provinces = array();
$cities = array();
foreach ($json_decode as $pkey => $province) {
    $provinces[$pkey] = array(
        'provinceince' => key($province),
    );
    foreach ($province as $c) {
        foreach ($c as $ckey => $city) {
            $cities[$key] = array(
                'city' => $city
            );
        }
    }
}