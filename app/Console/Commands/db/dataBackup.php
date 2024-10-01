<?php

namespace App\Console\Commands\db;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DataBackup extends Command
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

    private $ignore_list = [
        // Системные
        'cache',
        'cache_locks',
        'failed_jobs',
        'password_reset_tokens',
        'sessions',
        'migrations',

        // Справочники
        'glossary__cities',
        'glossary__item_types',
        'glossary__item_categories',

    ];

    private function getIgnore()
    {
        $ignore_list = collect($this->ignore_list)->map(function ($table) {
            return ' --ignore-table=' . env('DB_DATABASE') . '.' . $table;
        })->toArray();
        return implode(' ', $ignore_list);
    }

    public function handle()
    {
        $this->info('Сохранение дампа даннных');

        $date = now()->format('Y-m-d');
        $local_path = "backup/$date-data.sql";
        Storage::put($local_path, '');
        $path = Storage::path($local_path);
        $connect_attr = "--user=" . env('DB_USERNAME') . " --password=" . env('DB_PASSWORD');
        $db = env('DB_DATABASE');
        $ignored = $this->getIgnore();

        $command = "mysqldump --no-tablespaces --complete-insert $connect_attr --no-create-info $ignored $db > $path";
        exec($command);

        $this->info("Дамп даннных сохранен по пути:\n$path");
    }
}
