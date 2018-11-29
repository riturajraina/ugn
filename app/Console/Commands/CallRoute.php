<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;

class CallRoute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:call {uri}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'php artsian route:call /route';
	/**
		For creating this file, artisan command is : php artisan make:command CallRoute
		If you want to change the name of command i.e. instead of route:call /route, you want to
		make command like cron:call /route, then in the protected var $signature above, put the
		name as cron:call {uri} instead of route:call {uri}.
		You can create a separate file by the name of CallCron.php & place it here in the same namespace
		& then you have to add the path of that file in the App/Console/Kernel.php file in the $commands array
		...Rituraj 11/29/2017
	*/

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $request = Request::create($this->argument('uri'), 'GET');
        $this->info(app()->make(\Illuminate\Contracts\Http\Kernel::class)->handle($request));
    }

}