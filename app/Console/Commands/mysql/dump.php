<?php

namespace App\Console\Commands\mysql;

use App\Core\MySQLDumper;
use App\Models\Glossary\City;
use App\Models\Glossary\ProductCategory;
use Illuminate\Console\Command;

class dump extends Command
{
    protected
        $signature = 'mysql:dump',
        $description = 'Создает бэкап данных в БД';

    public function handle()
    {
        $this->info('Создание дампа данных БД');

        $dumper = new MySQLDumper();
        $dumper
            ->setHost(config('database.connections.mysql.host'))
            ->setPort(config('database.connections.mysql.port'))
            ->setDatabase(config('database.connections.mysql.database'))
            ->setUser(config('database.connections.mysql.username'))
            ->setPassword(config('database.connections.mysql.password'))
            ->setCreateInfo(false)
            ->setStripOptions([
                'sys__cache',
                'sys__cache_locks',
                'sys__failed_jobs',
                'sys__jobs',
                'sys__job_batches',
                'sys__sessions',

                City::getTableName(),
                ProductCategory::getTableName(),
            ]);
        $this->info($dumper->dump());
    }
}
