<?php

namespace App\Console\Commands\db;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

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
        $this->info('Сохранение дампа БД');

        $date = now()->format('Y-m-d');
        $local_path = "backup/$date-full.sql";
        Storage::put($local_path, '');

        $path = Storage::path($local_path);
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $db = env('DB_DATABASE');

        $command = "mysqldump $connect_attr $db > $path";
        exec($command);

        $this->info("Дамп БД сохранен по пути:\n$path");
    }
}
