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

$cities = array();
$provinces = array();
if (($handle = fopen("cities.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        //province
        if(count($provinces) == 0){
            $provinces[$data[2]] = array(
                'province' => $data[3],
                'country_id' => 'ID'
            );
        } else {
            foreach ($provinces as $key => $value) {
                if (!isset($provinces[$data[2]])) {
                    $provinces[$data[2]] = array(
                        'province' => $data[3],
                        'country_id' => 'ID'
                    );
                }
            }
        }  
        //city
        if (count($cities) == 0) {
            $cities[$data[0]] = array(
                'city' => $data[1],
                'province_id' => $data[2]
            );
        } else {
            foreach ($cities as $key => $value) {
                if (!isset($cities[$data[0]])) {
                    $cities[$data[0]] = array(
                        'city' => $data[1],
                        'province_id' => $data[2]
                    );
                }
            }
        }
    }
    fclose($handle);
}