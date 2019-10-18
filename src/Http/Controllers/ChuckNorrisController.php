<?php

namespace Utichawa\CorePackage\Http\Controllers;

use Utichawa\CorePackage\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}