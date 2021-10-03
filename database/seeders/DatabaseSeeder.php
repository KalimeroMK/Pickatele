<?php
namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(workflow_table_seeder::class);
         $this->call('CountriesSeeder');
         $this->command->info('Seeded the countries!');
         User::factory()->count(1)->create();

    }
}
