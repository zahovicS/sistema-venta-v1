<?php
namespace App\Database\Seeds;

use App\Models\Brand;
use App\Database\Factories\BrandFactory;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        (new BrandFactory())->create(20)->save();
    }
}
