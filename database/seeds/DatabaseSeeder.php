<?php

use Illuminate\Database\Seeder;

class DatabaseSeedera extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([TasksTableSeeder::class]);
    }
}
