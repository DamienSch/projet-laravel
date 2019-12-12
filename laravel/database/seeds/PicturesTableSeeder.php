<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $table = 'pictures';
    public function run()
    {
        DB::table($this->table)->insert([
            'link' => 'resources/img/0693445251_1_1_1.jpg',
            'name' => 'MyImagTitle',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
