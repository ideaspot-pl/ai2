<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function variables()
    {
        return view('blade.variables', [
            'foo' => 'bar',
            'arr' => ['abc' => 'xyz'],
        ]);
    }
}
