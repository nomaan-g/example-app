<?php
use Illuminate\Support\Facades\Route;
use Practicals\Song;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/veggies/{sabji}', function ($sabji) {

    return $sabji;
})->whereIn('sabji', ['baigan', 'bhindi', 'aaloo', 'gobhi']);
Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/hello', function () {
    return view('veggies');
});

// On route '/veggies 'a chart should be seen , with name and price of veggies
Route::get('/veggies', function () {
    return view('table');
});

Route::get('/songs', function () {
    return "Songs";
});
Route::get('/songs', function () {
    $song = new Song();
    $song->setTitle('With You');
    return view('songs', [ 'song' => $song ]);
});
Route::get('/songs_static', function () {
    return view('songs_static');
});
Route::get('/songs_static', function () {
    $song1 = new Song();
    $song1->setTitle("Stan");
    $song1->setArtist("Eminem");
    // $song1 = new Song();
    // $song1->setTitle("Stan");
    // $song1->setArtist("Eminem");
    $song2 = new Song();
    $song2->setTitle("Nothing Else Matters");
    $song2->setArtist("Metallica");
});
