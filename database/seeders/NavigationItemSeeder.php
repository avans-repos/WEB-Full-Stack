<?php

namespace Database\Seeders;

use App\Models\NavigationItem;
use Illuminate\Database\Seeder;

class NavigationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        NavigationItem::create([
            'name'=>'Home',
            'url'=>'/',
        ]);
        NavigationItem::create([
            'name'=>'Login',
            'url'=>'/login',
        ]);
    }
}