<?php

namespace Utichawa\CorePackage;

class JokeFactory
{
    protected $jokes = [
        '3 Kitties',
        'One girl',
        'testing',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
