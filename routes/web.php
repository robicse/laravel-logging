<?php

use Illuminate\Support\Facades\Route;

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
    // \Log::channel('customlog')->info('custom log store here '. date('Y:m:d H:i:s'));

    // \Log::channel('customlog')->emergency('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->alert('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->critical('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->error('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->warning('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->notice('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->info('custom log store here '. date('Y:m:d H:i:s'));
    // \Log::channel('customlog')->debug('custom log store here '. date('Y:m:d H:i:s'));

    return view('welcome');
});

Route::get('/get-custom-error-log', function(Request $request){
    $logfile = file(storage_path().'/logs/customlog.log');
    $collection = [];
    foreach($logfile as $line_number => $line){
        $collection[] = array('line' => $line_number , 'content' => htmlspecialchars($line));
    }
    dd($collection);
});

Route::get('/get-default-error-log', function(Request $request){
    $logfile = file(storage_path().'/logs/laravel.log');
    $collection = [];
    foreach($logfile as $line_number => $line){
        $collection[] = array('line' => $line_number , 'content' => htmlspecialchars($line));
    }
    dd($collection);
});
