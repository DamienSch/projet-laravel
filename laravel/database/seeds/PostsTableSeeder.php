<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /* Generate Posts data */
    public function run()
    {
        factory(App\Posts::class, 80)->create();
    }
}
