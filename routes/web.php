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
    return view('mailbox', ['messages'=>$inbox->getAllMessages(), 'errorNo'=>generateRandomString(10), 'restoreQuestion'=>$inbox->getRandomQuestion()]);
}); 

Route::get('/checkPassword', function (Request $request) {
    $inbox = new Inbox;
    return view('mailbox', ['messages'=>$inbox->getAllMessages(), 'errorNo'=>generateRandomString(10), 'restoreQuestion'=>$inbox->getRandomQuestion(), 'password'=>$request->password]);
});

Route::get('/search', function (Request $request) {
    $inbox = new Inbox;
    return view('mailbox', ['messages'=>$inbox->getMessagesWith($request->string), 'errorNo'=>generateRandomString(10), 'restoreQuestion'=>$inbox->getRandomQuestion()]);
});

Route::get('/restorePassword', function (Request $request) {
    $inbox = new Inbox;
    return view('mailbox', ['messages'=>$inbox->getAllMessages(), 'errorNo'=>generateRandomString(10), 'restoreQuestion'=>$inbox->getRandomQuestion(), 'answer'=>$request->answer]);
});

Route::get('/test', function () {
    $inbox = new Inbox;
    return $inbox->getAllMessages();
});


class Inbox {
    public $messages;
    public $restorePasswordQuestions;
    function __construct() {
        $wrongMessage = 'This is not the message you are looking for';
        $this->messages = [
            ['id'=>'1', 'title'=>'Message #1', 'content'=>'visit the link to find the box code goo.gl/alkdjg344', 'date'=>'Sat 11:35 PM', 'sender'=>'important@ftc.com'],
            ['id'=>'2', 'title'=>'Message #2', 'content'=>$wrongMessage, 'date'=>'Sat 9:30 AM', 'sender'=>'saleh@ftc.com'],
            ['id'=>'3', 'title'=>'Message #3', 'content'=>$wrongMessage, 'date'=>'Fri 12:12 AM', 'sender'=>'mohammed@ftc.com'],
            ['id'=>'4', 'title'=>'Message #4', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'osama@ftc.com'],
            ['id'=>'5', 'title'=>'Message #5', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'wadah@ftc.com'],
            ['id'=>'6', 'title'=>'Message #6', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'ali@ftc.com'],
            ['id'=>'7', 'title'=>'Message #7', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'ferasAKAfares@ftc.com'],
            ['id'=>'8', 'title'=>'Message #8', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'abdullah@ftc.com'],
            ['id'=>'9', 'title'=>'Message #10', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'anas@ftc.com'],
            ['id'=>'10', 'title'=>'Message #9', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'mySetup@ftc.com'],
            ['id'=>'11', 'title'=>'Message #11', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'someone@ftc.com'],
            ['id'=>'12', 'title'=>'Message #12', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'luffy@ftc.com'],
            ['id'=>'13', 'title'=>'Message #13', 'content'=>$wrongMessage, 'date'=>'Tue 10:18 PM', 'sender'=>'ksu@ftc.com'],
        ];

        $this->restorePasswordQuestions = [
            'When did you first get your diapers ?',
            'how many fishes exists in the club ?',
            'how do you see your self after 5 years ?',
            'who is your uncle ?'
        ];
    }

    public function getMessagesWith($string) {
        $filteredMessages = [];
        for($i = 0; $i < count($this->messages); $i++) {
            if (strpos($this->messages[$i]['title'], $string) !== false || strpos($this->messages[$i]['content'], $string) !== false || strpos($this->messages[$i]['sender'], $string) !== false) {
                array_push($filteredMessages, $this->messages[$i]);
            }
        }
        return $filteredMessages;
    }

    public function getAllMessages() {
        return $this->messages;
    }

    public function getRandomQuestion() {
        return $this->restorePasswordQuestions[rand(0, count($this->restorePasswordQuestions)-1)];
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEF';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}