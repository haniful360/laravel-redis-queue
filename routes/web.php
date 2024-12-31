<?php

use App\Jobs\SendEmailJob;
use App\Mail\SendTestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dispatch(new SendEmailJob);
    return view('welcome');
});
