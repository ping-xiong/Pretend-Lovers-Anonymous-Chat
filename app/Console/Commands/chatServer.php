<?php

namespace App\Console\Commands;

use GatewayWorker\BusinessWorker;
use GatewayWorker\Gateway;
use GatewayWorker\Register;
use Illuminate\Console\Command;
use Jenssegers\Agent\Agent;
use Workerman\Worker;

class chatServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'workman {action} {--d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start a Workerman server.';

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

        // 判断当前系统

        $agent = new Agent();
        if ($agent->isDesktop('Windows')){
            echo "run on windows";
            $this->runOnWindows();
        }else{
            echo "run on Linux";
            global $argv;
            $action = $this->argument('action');

            $argv[0] = 'wk';
            $argv[1] = $action;
            $argv[2] = $this->option('d') ? '-d' : '';

            $this->start();
        }
    }

    private function start()
    {
        $this->startRegister();
        $this->startGateWay();
        $this->startBusinessWorker();

        Worker::runAll();
    }

    private function startBusinessWorker()
    {
        $worker                  = new BusinessWorker();
        $worker->name            = 'BusinessWorker';
        $worker->count           = 1;
        $worker->registerAddress = '127.0.0.1:1236';
        $worker->eventHandler    = \App\Workerman\Events::class;
    }

    private function startGateWay()
    {
        $gateway = new Gateway("websocket://0.0.0.0:2346");
        $gateway->name                 = 'Gateway';
        $gateway->count                = 1;
        $gateway->lanIp                = '127.0.0.1';
        $gateway->startPort            = 2300;
        $gateway->pingInterval         = 30;
        $gateway->pingNotResponseLimit = 0;
        $gateway->pingData             = '{"type":"@heart@"}';
        $gateway->registerAddress      = '127.0.0.1:1236';
    }

    private function startRegister()
    {
        new Register('text://0.0.0.0:1236');
    }


    // Windows run
    private function runOnWindows(){
        $output = '';
//        echo app_path('Workman\forWin\start_for_win.bat');
        $command = 'php '.app_path('Workman\forWin\start_register.php').' '.app_path('Workman\forWin\start_gateway.php').' '.app_path('Workman\forWin\start_businessworker.php');
//        echo $command;
//        exec($command, $output);
        // 执行Windows系统命令
        passthru($command, $output);

        var_dump($output);
    }
}
