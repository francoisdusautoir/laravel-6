<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('robert', function () {
    $headers = ['ID', 'Name', 'Email'];
    $rows = [
    	2 => ['id' => 1, 'name' => 'François', 'email' => 'fd@qdb.fr'],
    	1 => ['id' => 2, 'name' => 'David', 'email' => 'db@qdb.fr' ]
    ];

    $this->table($headers, $rows);

})->describe('Display an inspiring quote');

Artisan::command('test', function () {
    $this->line('test');
    $this->info('test');
    $this->question('test');
    $this->warn('test');
    $this->error('test');
})->describe('Display an inspiring quote');