<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('employee')->delete();

        $faker = Faker\factory::create( locale: 'ja_JP');

        $dept = ['1', '2'];

        for ( $i = 0; $i < 10; $i ++) {
            \App\Employee::create([
                'dept_id' => $faker->randomElement($dept),
                'name' => $faaker->name(),
                'email' => $faker->email(),
            ]);
        }
    }
}
