<?php

use Illuminate\Database\Seeder;
use App\operation;
class isler extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\operation::class, 20)->create();
    }
}
