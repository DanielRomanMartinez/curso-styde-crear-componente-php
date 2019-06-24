<?php
/**
 * Created by PhpStorm.
 * User: DK
 * Date: 24/06/2019
 * Time: 21:49
 */

namespace DKEstudio;


class SessionFileDriver
{

    public static function load()
    {
        $file = __DIR__ . '/../storage/session/session.json';

        if(file_exists($file)){
            return json_decode(file_get_contents($file), true);
        }

        return [];

    }

}