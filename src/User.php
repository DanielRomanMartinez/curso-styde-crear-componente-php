<?php
/**
 * Created by PhpStorm.
 * User: DK
 * Date: 24/06/2019
 * Time: 21:51
 */

namespace DKEstudio;


class User
{

    protected $attributes;

    public function __construct(array $attributes = array())
    {
        $this->attributes = $attributes;
    }

    public function __get($var)
    {
        return $this->attributes[$var] ?? null;
    }



}