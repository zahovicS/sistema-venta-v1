<?php
namespace App\Database\Seeds;

use App\Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can also use factories like this 👇
        (new UserFactory)->create(2)->save();
    }
}
