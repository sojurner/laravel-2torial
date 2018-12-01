<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

            return view('welcome')->with([
                'user' => 'Paul',
                'tasks' => [
                    'Go to the store',
                    'Learn Laravel',
                    'Clean Room'
                ]
            ]);
    }
}
