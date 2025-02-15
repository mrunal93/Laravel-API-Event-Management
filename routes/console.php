<?php


// C:\Users\mrn26\Documents\Startup\DhritiAyurvedam\PhP Dhrithi\Laravle\Cource\API\event-management>php artisan schedule:work

//    INFO  Running scheduled tasks.


//   2025-02-15 20:43:01 Running ["artisan" app:send-event-reminders] ..................................... 629.06ms DONE
//   ⇂ "C:\xampp\php\php.exe" "artisan" app:send-event-reminders > "NUL" 2>&1


//   2025-02-15 20:44:02 Running ["artisan" app:send-event-reminders] ..................................... 884.92ms DONE
//   ⇂ "C:\xampp\php\php.exe" "artisan" app:send-event-reminders > "NUL" 2>&1




use App\Console\Commands\SendEmailsCommand;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command('app:send-event-reminders')->everyMinute();
