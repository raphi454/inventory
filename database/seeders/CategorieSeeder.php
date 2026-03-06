<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [[
            'title' => 'C1'
        ],
            [
                'title' => 'C2'
            ],
            [
                'title' => 'C3'
            ]
        ];
        foreach ($categories as $categorie) {
            $c = new Categorie();
            $c->title = $categorie['title'];

            $c->save();
        }
    }
}
