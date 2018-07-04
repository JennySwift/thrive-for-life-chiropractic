<?php

use App\Models\Survey;
use Illuminate\Database\Seeder;

class SurveysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::truncate();

        Survey::create([
            'name' => 'Lifestyle',
        ]);

        Survey::create([
            'name' => 'Sleep',
        ]);
    }
}
