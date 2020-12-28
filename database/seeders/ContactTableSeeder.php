<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //reset a tabela users
        \DB::table('contacts')->truncate();//apagar todos os dados da tabela

        $faker = Factory::create();//dados falsos aleatores

        $contact = new Contact();
        $contact->first_name = "Dagmar";
        $contact->last_name = "Mpheio";
        $contact->email = "dagmarmpheiu@gmail.com";
        $contact->city = "Lubango";
        $contact->country = "Angola";
        $contact->job_title = "Engenheiro";
        $contact->save();

        for ($i = 1; $i <= 100; $i++) {
            \DB::table('contacts')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'city' => $faker->city,
                'country' => $faker->country,
                'job_title' => $faker->jobTitle,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}
