<?php

use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getBloodTypes() as $type){
            \App\Models\BloodType::create(['type' => $type]);
        }
    }
    private function getBloodTypes()
    {
        return [
            'A+',
            'A-',
            'B+',
            'B-',
            'AB+',
            'AB-',
            'O+',
            'O-'
        ];
    }
}
