<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getCities() as $city){
            City::create(['name' => $city]);
        }
    }
    private function getCities()
    {
        return [
            'Скопје',
            'Битола',
            'Куманово',
            'Прилеп',
            'Тетово',
            'Велес',
            'Штип',
            'Охрид',
            'Гостивар',
            'Струмица',
            'Кавадарци',
            'Кочани',
            'Кичево',
            'Струга',
            'Радовиш',
            'Гевгелија',
            'Дебар',
            'Крива Паланка',
            'Свети Николе',
            'Неготино',
            'Делчево',
            'Виница',
            'Ресен',
            'Пробиштип',
            'Берово',
            'Кратово',
            'Крушево',
            'Македонски Брод',
            'Валандово',
            'Демир Хисар'
        ];
    }
}
