<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $rooms = [[
            'title' => '3BHK'
        ],
            [
                'title' => '4BHK'
            ],
            [
                'title' => '2BHK'
            ]
        ];
        foreach ($rooms as $room) {
            $r = new Room();
            $r->title = $room['title'];
            $r->school_id = 1; // Schule ID setzen
            $r->save();
    }
}
}
