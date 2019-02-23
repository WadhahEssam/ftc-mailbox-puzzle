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
    $inbox = new Inbox;
    return view('mailbox', ['messages'=>$inbox->getAllMessages(), 'password'=>$request->password]);
});

Route::get('/search', function (Request $request) {
    $inbox = new Inbox;
    return view('mailbox', ['messages'=>$inbox->getMessagesWith($request->string)]);
});

Route::get('/test', function () {
    $inbox = new Inbox;
    return $inbox->getAllMessages();
});


class Inbox {
    public $messages;
    function __construct() {
        $wrongMessage = 'This is not the message you are looking for';
        $this->messages = [
            ['id'=>'1', 'title'=>'Message #1', 'content'=>'visit the link to find the box code goo.gl/alkdjg344', 'date'=>'Sat 11:35 PM'],
            ['id'=>'2', 'title'=>'Message #2', 'content'=>$wrongMessage, 'date'=>'Sat 9:30 AM'],
            ['id'=>'3', 'title'=>'Message #3', 'content'=>$wrongMessage, 'date'=>'Fri 12:12 AM'],
            ['id'=>'4', 'title'=>'Message #4', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'5', 'title'=>'Message #5', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'6', 'title'=>'Message #6', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'7', 'title'=>'Message #7', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'8', 'title'=>'Message #8', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'9', 'title'=>'Message #10', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'10', 'title'=>'Message #9', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'11', 'title'=>'Message #11', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'12', 'title'=>'Message #12', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
            ['id'=>'13', 'title'=>'Message #13', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM'],
        ];
    }

    public function getMessagesWith($string) {
        $filteredMessages = [];
        for($i = 0; $i < count($this->messages); $i++) {
            if (strpos($this->messages[$i]['title'], $string) !== false || strpos($this->messages[$i]['content'], $string) !== false ) {
                array_push($filteredMessages, $this->messages[$i]);
            }
        }
        return $filteredMessages;
    }

    public function getAllMessages() {
        return $this->messages;
    }
}
