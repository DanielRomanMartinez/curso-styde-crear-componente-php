<?php
/**
 * Created by PhpStorm.
 * User: DK
 * Date: 24/06/2019
 * Time: 19:51
 */

use PHPUnit\Framework\TestCase;
use DKEstudio\AccessHandler as Access;

class AccessHandlerTest extends TestCase
{
    public function test_grant_access()
    {
        $this->assertTrue(Access::check('admin'));
    }

    public function test_deny_access()
    {
        $this->assertFAlse(Access::check('editor'));
    }
}