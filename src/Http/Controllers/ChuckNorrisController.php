<?php

namespace Utichawa\CorePackage\Http\Controllers;

use Utichawa\CorePackage\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke', [
            'joke' => ChuckNorris::getRandomJoke(),
        ]);
    }
}
