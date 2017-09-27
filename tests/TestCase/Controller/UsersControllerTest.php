<?php

namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];

    /**
     * Test login method
     *
     * @return void
     */
    public function testlogin()
    {
        $data = ['email' => 'lorem@example.com', 'password' => '123456'];

        $this->post('/login', $data);

        $this->assertResponseCode(200);
        // More asserts.
    }
}
