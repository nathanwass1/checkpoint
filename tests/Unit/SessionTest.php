<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApplication()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['Admin' => 'True'])
                         ->get('/');
    }
}
