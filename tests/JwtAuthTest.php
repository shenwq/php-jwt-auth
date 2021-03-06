<?php

namespace ffhome\tests\util;

use ffhome\util\JwtAuth;
use PHPUnit\Framework\TestCase;

class JwtAuthTest extends TestCase
{
    public function testGetToken()
    {
        $this->assertEquals('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MX0.f-ikIbqKPmbzaemQ-ol3be8iNPt3DBJvJVCsAg_vhBg', JwtAuth::getToken(['id' => 1]));
    }

    public function testVerifyToken()
    {
        $info = JwtAuth::verifyToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MX0.f-ikIbqKPmbzaemQ-ol3be8iNPt3DBJvJVCsAg_vhBg');
        $this->assertEquals(1, $info['id']);
    }
}