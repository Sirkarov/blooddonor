<?php

use Illuminate\Database\Seeder;

class GenderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getGenderTypes() as $gender) {
            \App\Models\GenderType::create(['type' => $gender]);
        }
    }

    private function getGenderTypes()
    {
        return [
            'Машко',
            'Женско'
        ];
    }
}
