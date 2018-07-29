<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = [
            [
                'id' => 1,
                'content' => 'Este es mi primer mensaje!',
                'image' => 'http://placeimg.com/600/338/tech?1',

            ],
            [
                'id' => 2,
                'content' => 'Este es mi segundo mensaje!',
                'image' => 'http://placeimg.com/600/338/tech?2',

            ],
            [
                'id' => 3,
                'content' => 'Otro mensaje más!',
                'image' => 'http://placeimg.com/600/338/people?3',

            ],
            [
                'id' => 4,
                'content' => 'El último mensaje!',
                'image' => 'https://picsum.photos/600/338?image=0',

            ],
        ];

        return view('welcome', [
            'messages' => $messages,
        ]);
    }
}
