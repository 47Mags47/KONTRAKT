<?php

namespace App\Console\Commands\db;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Restore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:restore';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call(dataBackup::class);

        $this->info('Сброс БД');
        $this->call('migrate:fresh', ['--seed' => 'default']);

        $files = Storage::allFiles('backup');
        $latest_time = 0;
        $latest_file = '';

        foreach ($files as $path) {
            if(preg_match('/^.*-data.sql$/', $path)){
                $path = Storage::path($path);
                if(filectime($path) > $latest_time){
                    $latest_time = filectime($path);
                    $latest_file = $path;
                }
            }
        }

        $this->info(string: 'Восстановление данных');

        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $db = env('DB_DATABASE');

        $command = "mysql $connect_attr --force $db < $latest_file";
        exec($command);

        $this->info('Завершено');
    }
}
