<?php

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

use Illuminate\Http\Request;

Route::get('/', function () {
    $inbox = new Inbox;
    return view('mailbox', ['messages'=>$inbox->getAllMessages()]);
}); 

Route::get('/checkPassword', function (Request $request) {
    return view('mailbox', ['password'=>$request->password]);
});

Route::get('/test', function () {
    $inbox = new Inbox;
    return $inbox->getAllMessages();
});


class Inbox {
    public $messages;
    function __construct() {
        $this->messages = [
            ['title'=>'Message #1', 'content'=>'This is the content for first inbox message', 'date'=>'Sat 11:35'],
            ['title'=>'Message #1', 'content'=>'This is the content for first inbox message', 'date'=>'Sat 11:35'],
            ['title'=>'Message #1', 'content'=>'This is the content for first inbox message', 'date'=>'Sat 11:35'],
            ['title'=>'Message #1', 'content'=>'This is the content for first inbox message', 'date'=>'Sat 11:35'],
        ];
    }

    public function getAllMessages() {
        return $this->messages;
    }
}
