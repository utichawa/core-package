<?php

namespace Utichawa\CorePackage\Tests;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;
use Utichawa\CorePackage\ChuckNorrisJokesServiceProvider;
use Utichawa\CorePackage\Console\ChuckNorrisJoke;
use Utichawa\CorePackage\Facades\ChuckNorris;

class LaravelTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ChuckNorrisJokesServiceProvider::class
        ];
    }

    public function getPackageAliases($app)
    {
        return [
            'ChuckNorris' => ChuckNorrisJoke::class
        ];
    }

    /** @test */
    public function the_console_command_returns_a_joke()
    {
        $this->withoutMockingConsoleOutput();

        ChuckNorris::shouldReceive('getRandomJoke')
            ->once()
            ->andReturn('some joke');

        $this->artisan('chuck-norris');

        $output = Artisan::output();

        $this->assertSame('some joke' . PHP_EOL, $output);
    }

    /** @test */
    public function the_route_can_be_accesessed()
    {
        ChuckNorris::shouldReceive('getRandomJoke')
            ->once()
            ->andReturn('some joke');

        $this->get('/chuck-norris')
            ->assertStatus(200);
    }
}