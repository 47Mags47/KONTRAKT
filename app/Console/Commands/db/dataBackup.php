<?php

namespace App\Console\Commands\db;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class dataBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:data-backup';

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
        $this->info('Сохранение дампа даннных');

        $date = now()->format('Y-m-d');
        $local_path = "backup/$date/$date-data.sql";
        Storage::put($local_path, '');

        $path = Storage::path($local_path);
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $db = env('DB_DATABASE');

        $command = "mysqldump --no-tablespaces --complete-insert $connect_attr --no-create-info $db > $path";
        exec($command);

        $this->info("Дамп даннных сохранен по пути:\n$path");
    }
}
