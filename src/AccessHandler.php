<?php
/**
 * Created by PhpStorm.
 * User: DK
 * Date: 24/06/2019
 * Time: 19:50
 */

namespace DKEstudio;


class AccessHandler
{
    public static function check($role)
    {
        return 'admin' === $role;
    }
}