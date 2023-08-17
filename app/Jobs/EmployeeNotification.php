<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\EmployeeNotification as EmployeeNotificationQueue;
use App\Models\Employee;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class EmployeeNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $employee;

    /**
     * Create a new job instance.
     */


    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }




    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $company = $this->employee->company;
        $company->notify(New EmployeeNotificationQueue($this->employee));

        // $email = 'positronx@gmail.com';

        // $maildata = [
        //     'title' => 'Laravel Mail Sending Example with Markdown',
        //     'url' => 'https://www.positronx.io'
        // ];

        // Mail::to($email)->send(new OrderShipped($maildata));

    }
}

