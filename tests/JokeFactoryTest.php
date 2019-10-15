<?php

namespace Utichawa\CorePackage\Tests;

use PHPUnit\Framework\TestCase;
use Utichawa\CorePackage\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }
}