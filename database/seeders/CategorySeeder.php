<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['nombre'=>'Programador web','status'=>true]);
        Category::create(['nombre'=>'Contador','status'=>true]);
        Category::create(['nombre'=>'Musico','status'=>true]);
        Category::create(['nombre'=>'Conductor','status'=>true]);
    }
}
