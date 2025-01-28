<?php

namespace App\Core;

class MySQLDumper
{
    private
        $host,
        $port,
        $database,
        $user,
        $password,
        $strip_options,
        $create_info = '',
        $filename;
    protected
        $base_command = 'mysqldump',
        $standart_options = '--no-tablespaces --complete-insert';

    public function __construct() {}

    public function dump()
    {
        $base_command = $this->base_command;
        $standart_options = $this->standart_options;
        $connection_options = $this->getConnectionOptions() ?? '';
        $create_info_options = $this->create_info;
        $strip_options = $this->strip_options;

        $file_name = $this->filename ?? $this->setFileName()->filename;
        $path = storage_path('app/private/backup/') . $file_name;
        $command = "$base_command $this->database $standart_options $connection_options $create_info_options $strip_options > $path";
        exec($command);

        return "Дамп успешно сохранен в $path";
    }

    public function getConnectionOptions()
    {
        if (!$this->host or !$this->port or !$this->user or !$this->password) return false;

        return "--host=$this->host --port=$this->port --user=$this->user --password=$this->password";
    }

    public function setStripOptions(array $tables)
    {
        $strip_options = '';
        foreach ($tables as $table) {
            $strip_options = $strip_options . '--ignore-table=' . $this->database . '.' . $table . ' ';
        }
        $this->strip_options = $strip_options;
    }


    public function setHost(string $host)
    {
        $this->host = $host;
        return $this;
    }
    public function setPort(string $port)
    {
        $this->port = $port;
        return $this;
    }
    public function setDatabase(string $database)
    {
        $this->database = $database;
        return $this;
    }
    public function setUser(string $user)
    {
        $this->user = $user;
        return $this;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
        return $this;
    }
    public function setCreateInfo(bool $create_info = true)
    {
        $this->create_info = $create_info === true ? '' : '--no-create-info';
        return $this;
    }
    public function setFileName(string|null $filename = null)
    {
        $this->filename = $filename === null ? now()->format('Y_m_d_H_i_s') . '.sql' : $filename;
        return $this;
    }
}
