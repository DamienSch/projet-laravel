<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $table = 'category';
    public function run()
    {
        DB::table($this->table)->insert([
            'name' => 'Homme',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table($this->table)->insert([
            'name' => 'Femme',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
