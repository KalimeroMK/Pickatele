<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class workflow_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workflow')->insert([
            'name' => 'Published',
            'color' => 'colored-palegreen',
        ]);
        DB::table('workflow')->insert([
            'name' => 'Waiting',
            'color' => 'colored-orange',
        ]);
    }
}