<?php
namespace App\Database\Seeds;

use App\Database\Factories\ClientFactory;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        // $clientseeder = new ClientSeeder();
        // $clientseeder->field = 'value';
        // $clientseeder->save();

        // or

        // ClientSeeder::create([
        //    'field' => 'value'
        // ]);

        // You can also use factories like this 👇
        (new ClientFactory)->create(100)->save();
    }
}
