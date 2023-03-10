<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome', [
        'comics'=> config('comics'),
        'navbar'=> [
            [
                'title'=> 'characters',
                'link'=> '/characters'
            ],
            [
                'title'=> 'comics',
                'link'=> '/comics'
            ],
            [
                'title'=> 'movies',
                'link'=> '/movies'
            ],
            [
                'title'=> 'tv',
                'link'=> '/tv'
            ],
            [
                'title'=> 'games',
                'link'=> '/games'
            ],
            [
                'title'=> 'collectibles',
                'link'=> '/collectibles'
            ],
            [
                'title'=> 'videos',
                'link'=> '/videos'
            ],
            [
                'title'=> 'fans',
                'link'=> '/fans'
            ],
            [
                'title'=> 'news',
                'link'=> '/news'
            ],
            [
                'title'=> 'shop',
                'link'=> '/shop'
            ]
        ]
    ]);
});
