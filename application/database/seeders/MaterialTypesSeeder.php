<?php

namespace Database\Seeders;

use App\Models\MaterialType;
use Illuminate\Database\Seeder;
use MongoDB\BSON\ObjectId;

class MaterialTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'tinta',
            'ribbon',
        ];

        foreach ($data as $item) {
            (new MaterialType(['id' => new ObjectId(), 'name' => $item]))->save();
        }
    }
}
