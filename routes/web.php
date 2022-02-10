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

})->name('homepage');


// Creo la route che mi servirà per poter visualizzare al dettaglio ogni singola comic card
Route::get('/comic/{id}', function($id) {

    $comic = [];

    $comics_array = config('comics');
    $current_comic = false;

    foreach($comics_array as $single_comic) {
        if($single_comic['id'] == $id) {
            $current_comic = $single_comic;
        }
    }

    $data = [
        'comic_info' => $current_comic
    ];
    
    return view('comic', $data);
})->name('comic');