<?php

namespace ffhome\tests\util;

use ffhome\util\JwtAuth;
use PHPUnit\Framework\TestCase;

class JwtAuthTest extends TestCase
{
    public function testGetToken()
    {
        $this->assertEquals('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MX0.f-ikIbqKPmbzaemQ-ol3be8iNPt3DBJvJVCsAg_vhBg', JwtAuth::getToken(['id' => 1]));
        $this->assertEquals('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MX0.YiwUBu7XWU0BG8o1BGnJylPTsUotQ5PGbCpJazkogRs', JwtAuth::getToken(['id' => 1], '2test95e8adcf8ba9646a6c0f'));
    }

    public function testVerifyToken()
    {
        $info = JwtAuth::verifyToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MX0.f-ikIbqKPmbzaemQ-ol3be8iNPt3DBJvJVCsAg_vhBg');
        $this->assertEquals(1, $info['id']);
        $info = JwtAuth::verifyToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MX0.YiwUBu7XWU0BG8o1BGnJylPTsUotQ5PGbCpJazkogRs', '2test95e8adcf8ba9646a6c0f');
        $this->assertEquals(1, $info['id']);
    }
}