<?php
/**
 * Created by PhpStorm.
 * User: DK
 * Date: 24/06/2019
 * Time: 19:50
 */

namespace DKEstudio;

use DKEstudio\SessionManager as Session;

class Authenticator
{

    protected static $user;

    public static function check()
    {
        return static::user() != null;
    }

    public static function user()
    {
        if(static::$user != null) return static::$user;

        $data = Session::get('user_data');

        if(!is_null($data)) return static::$user = new User($data);

        return null;

    }
}