<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonInterestsTypes;

class InterestTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types_data = [
            ['id' => 1, 'name' => 'sport'],
            ['id' => 2, 'name' => 'aviation'],
            ['id' => 3, 'name' => 'acyclic'],
            ['id' => 4, 'name' => 'martial arts'],
            ['id' => 5, 'name' => 'games'],
            ['id' => 6, 'name' => 'individual'],
            ['id' => 7, 'name' => 'strenuous'],
            ['id' => 8, 'name' => 'complex coordination'],
            ['id' => 9, 'name' => 'technical'],
            ['id' => 10, 'name' => 'cyclic'],
            ['id' => 11, 'name' => 'extreme'],
        ];

        // foreach ($types_data as $type) {
        //     PersonInterestsTypes::create($type);
        // }
        PersonInterestsTypes::create(['id' => 1, 'type_name' => 'asd']);
    }
}
