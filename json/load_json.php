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

$json = file_get_contents("DataCities.json");
$json_decode = json_decode($json);
$provinces = array();
$cities = array();
foreach ($json_decode as $pkey => $province) {
    $provinces[$pkey] = array(
        'province' => key($province),
    );
    foreach ($province as $c) {
        foreach ($c as $ckey => $city) {
            $cities[$ckey] = array(
                'city' => $city
            );
        }
    }
}

// mysql_connect("localhost", "root", "kholid.in") or die("Error Connection");
// if(mysql_select_db("master")){
//     foreach ($cities as $id => $city){
//         mysql_query("INSERT INTO city (city_id, name) VALUES ('$id', '$city[city]')");
//     }
// }