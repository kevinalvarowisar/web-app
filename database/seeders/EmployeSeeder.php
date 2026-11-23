<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('employes')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->cityName,
                'gender' => $faker->randomElement(['L', 'P']),
                'gaji' => $faker->randomElement([100000, 80000, 250000])
            ]);
        }
    }
}
