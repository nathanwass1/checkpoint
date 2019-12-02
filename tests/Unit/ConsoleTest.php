<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;



class ConsoleTest extends TestCase
{
    public function testBasicTest()
    {
        $this->artisan('nova:create', [
            'name' => 'My New Admin panel'
        ])
            ->expectsQuestion('Please enter your API key', 'apiKeySecret')
            ->expectsOutput('Authenticating...')
            ->expectsQuestion('Please select a version', 'v1.0')
            ->expectsOutput('Installing...')
            ->expectsQuestion('Do you want to compile the assets?', 'yes')
            ->expectsOutput('Compiling assets...')
            ->assertExitCode(0);
    }
}