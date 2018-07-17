<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DBDescribeTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $table = $this->argument('table');

        if ($this->tableDontExist($table)) {
            return $this->warn('Sorry, table not found.');
        }
        return $this->showTableDetails($table);
    }

    protected function tableDontExist($table)
    {
        return ! \Illuminate\Support\Facades\Schema::hasTable($table);
    }

    protected function showTableDetails($table)
    {
        $columns = \Illuminate\Support\Facades\DB::select("DESC {$table}");

        $headers = [
            'Field', 'Type', 'Null', 'Key', 'Default', 'Extra',
        ];

        $rows = collect($columns)->map(function ($column) {
            return get_object_vars($column);
        });

        return $this->table($headers, $rows);
    }
}
