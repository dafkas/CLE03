<?php namespace System\Utils\Place;
/**
 * Created by PhpStorm.
 * User: marvin_blabla
 * Date: 13-03-17
 * Time: 09:47
 */

class Place
{
    public $id, $lat, $lng;

    public function getJson($places)
    {
        header('Content-Type: text/html');
        echo json_encode($places);
    }
}