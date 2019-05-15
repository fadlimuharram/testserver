<?php

use Illuminate\Database\Seeder;
use App\Performance;
use App\Inbox;
use App\Notification;

class DummySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performanceBefore1 = new Performance();
        $performanceBefore1->target_time = 0;
        $performanceBefore1->work_time = 0;
        $performanceBefore1->achievement = 100;
        $performanceBefore1->overtime = 3;
        $performanceBefore1->created_at = "2019-04-28 05:38:34";
        $performanceBefore1->updated_at = "2019-04-28 05:38:34";
        $performanceBefore1->save();

        $performanceBefore2 = new Performance();
        $performanceBefore2->target_time = 0;
        $performanceBefore2->work_time = 0;
        $performanceBefore2->achievement = 100;
        $performanceBefore2->overtime = 3;
        $performanceBefore2->created_at = "2019-04-29 05:38:34";
        $performanceBefore2->updated_at = "2019-04-29 05:38:34";
        $performanceBefore2->save();

        $performanceBefore3 = new Performance();
        $performanceBefore3->target_time = 0;
        $performanceBefore3->work_time = 0;
        $performanceBefore3->achievement = 100;
        $performanceBefore3->overtime = 3;
        $performanceBefore3->created_at = "2019-04-30 05:38:34";
        $performanceBefore3->updated_at = "2019-04-30 05:38:34";
        $performanceBefore3->save();

        $performanceBefore4 = new Performance();
        $performanceBefore4->target_time = 0;
        $performanceBefore4->work_time = 0;
        $performanceBefore4->achievement = 100;
        $performanceBefore4->overtime = 3;
        $performanceBefore4->created_at = "2019-05-01 05:38:34";
        $performanceBefore4->updated_at = "2019-05-01 05:38:34";
        $performanceBefore4->save();

        $performanceBefore5 = new Performance();
        $performanceBefore5->target_time = 0;
        $performanceBefore5->work_time = 0;
        $performanceBefore5->achievement = 100;
        $performanceBefore5->overtime = 3;
        $performanceBefore5->created_at = "2019-05-02 05:38:34";
        $performanceBefore5->updated_at = "2019-05-02 05:38:34";
        $performanceBefore5->save();

        $performanceBefore6 = new Performance();
        $performanceBefore6->target_time = 0;
        $performanceBefore6->work_time = 0;
        $performanceBefore6->achievement = 100;
        $performanceBefore6->overtime = 3;
        $performanceBefore6->created_at = "2019-05-03 05:38:34";
        $performanceBefore6->updated_at = "2019-05-03 05:38:34";
        $performanceBefore6->save();

        $performanceBefore7 = new Performance();
        $performanceBefore7->target_time = 0;
        $performanceBefore7->work_time = 0;
        $performanceBefore7->achievement = 100;
        $performanceBefore7->overtime = 3;
        $performanceBefore7->created_at = "2019-05-04 05:38:34";
        $performanceBefore7->updated_at = "2019-05-04 05:38:34";
        $performanceBefore7->save();

        $performance1 = new Performance();
        $performance1->target_time = 0;
        $performance1->work_time = 0;
        $performance1->achievement = 100;
        $performance1->overtime = 3;
        $performance1->created_at = "2019-05-05 05:38:34";
        $performance1->updated_at = "2019-05-05 05:38:34";
        $performance1->save();

        $performance2 = new Performance();
        $performance2->target_time = 8;
        $performance2->work_time = 8;
        $performance2->achievement = 100;
        $performance2->overtime = 3;
        $performance2->created_at = "2019-05-06 05:38:34";
        $performance2->updated_at = "2019-05-06 05:38:34";
        $performance2->save();

        $performance3 = new Performance();
        $performance3->target_time = 8;
        $performance3->work_time = 8;
        $performance3->achievement = 100;
        $performance3->overtime = 1;
        $performance3->created_at = "2019-05-07 05:38:34";
        $performance3->updated_at = "2019-05-07 05:38:34";
        $performance3->save();

        $performance4 = new Performance();
        $performance4->target_time = 8;
        $performance4->work_time = 4;
        $performance4->achievement = 50;
        $performance4->overtime = 2;
        $performance4->created_at = "2019-05-08 05:38:34";
        $performance4->updated_at = "2019-05-08 05:38:34";
        $performance4->save();

        $performance5 = new Performance();
        $performance5->target_time = 8;
        $performance5->work_time = 8;
        $performance5->achievement = 100;
        $performance5->overtime = 0;
        $performance5->created_at = "2019-05-09 05:38:34";
        $performance5->updated_at = "2019-05-09 05:38:34";
        $performance5->save();

        $performance6 = new Performance();
        $performance6->target_time = 8;
        $performance6->work_time = 8;
        $performance6->achievement = 100;
        $performance6->overtime = 0;
        $performance6->created_at = "2019-05-10 05:38:34";
        $performance6->updated_at = "2019-05-10 05:38:34";
        $performance6->save();

        $performance7 = new Performance();
        $performance7->target_time = 0;
        $performance7->work_time = 0;
        $performance7->achievement = 100;
        $performance7->overtime = 4;
        $performance7->created_at = "2019-05-11 05:38:34";
        $performance7->updated_at = "2019-05-11 05:38:34";
        $performance7->save();

        $performance8 = new Performance();
        $performance8->target_time = 0;
        $performance8->work_time = 0;
        $performance8->achievement = 100;
        $performance8->overtime = 3;
        $performance8->created_at = "2019-05-12 05:38:34";
        $performance8->updated_at = "2019-05-12 05:38:34";
        $performance8->save();

        $inbox1 = new Inbox();
        $inbox1->title = "Lorem ipsum dolor sit amet";
        $inbox1->content =
            "consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna";
        $inbox1->save();

        $inbox2 = new Inbox();
        $inbox2->title = "Excepteur sint occaecat";
        $inbox2->content =
            "cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $inbox2->save();

        $inbox3 = new Inbox();
        $inbox3->title = "Ut enim ad minim veniam";
        $inbox3->content =
            "quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";
        $inbox3->save();

        $notif1 = new Notification();
        $notif1->title = "Quam vulputate dignissim suspendisse in";
        $notif1->content =
            "sed do eiusmod tempor incididunt ut labore et dolore magna aliqua";
        $notif1->type = "slightly_important";
        $notif1->save();

        $notif2 = new Notification();
        $notif2->title = "consectetur adipiscing elit";
        $notif2->content =
            "Odio tempor orci dapibus ultrices in iaculis nunc sed.";
        $notif2->type = "normal";
        $notif2->save();

        $notif3 = new Notification();
        $notif3->title = "Feugiat sed lectus vestibulum ";
        $notif3->content =
            "Bibendum at varius vel pharetra vel. Sed enim ut sem viverra aliquet eget";
        $notif3->type = "very_important";
        $notif3->save();
    }
}
