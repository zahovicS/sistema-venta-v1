<?php
namespace App\Database\Seeds;

use App\Database\Factories\ClientFactory;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {

        (new ClientFactory)->create(100)->save();
    }
}
