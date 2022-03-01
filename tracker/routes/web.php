<?php
use App\Events\CarMoved;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;
// use car moved


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
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
    // dd means  dump and die
    // dd('Your Route is working');
});
Route::get('/move', function () {
    // Broadcast::channel('vTracker')->broadcast(new \App\Events\CarMoved(1.1, 1.2));
    //  event(new CarMoved(26.516049, 86.763895));
        // event(new CarMoved(26.652368,87.013838));
    // event(new CarMoved(26.66667, 87.28333));
    event(new CarMoved(26.483333,87.283333));
    dump('Car moved');
});