<?php
/**
 * Created by PhpStorm.
 * User: DK
 * Date: 24/06/2019
 * Time: 19:50
 */

namespace DKEstudio;

use DKEstudio\Authenticator as Auth;

class AccessHandler
{
    public static function check($role)
    {
        return Auth::check() && Auth::user()->role == $role;
    }
}