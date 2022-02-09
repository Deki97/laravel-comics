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

    // In questo modo vado a prendermi il return del file comics.php, che si trova dentro config
    $comics_array = config('comics');
    // dd($comics_array);

    $comics_cards = [];

    foreach($comics_array as $comic) {
        // dd($comic);
        $comics_cards[] = $comic;
    }
    // dd($comics_cards);

    $data = [
        'comics_cards' => $comics_cards
    ];

    
    return view('home', $data);
});
