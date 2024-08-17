<?php
namespace App\Database\Seeds;

use App\Models\Category;
use App\Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        (new CategoryFactory())->create(30)->save();
    }
}
