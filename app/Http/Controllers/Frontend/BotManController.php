<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;

class BotManController extends Controller
{
    //
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
            }elseif($message == '1'){
                $this->askOne($botman);
            }


        });

        $botman->listen();
    }
    public function askName($botman)
    {
        $botman->ask('Chào bạn ! Tên bạn là gì?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Rất vui được quen bạn '.$name);
            $this->say('Hãy chọn các mục bên dưới hoặc nhập câu hỏi để Bot hỗ trợ bạn nha.
                    1. Chính sách bán hàng
                    2. Dịch vụ bảo hành
                    3. Chính sách đổi trả
            ');
        });
    }
    public function askOne($botman)
    {
        $botman->ask('Về chính sách bảo hành của Shop', function(Answer $answer) {

            $one = $answer->getText('Sửa chữa đồng giá 150.000đ.');

            $this->say($one.'Sửa chữa đồng giá 150.000đ.');
        });
    }
}
