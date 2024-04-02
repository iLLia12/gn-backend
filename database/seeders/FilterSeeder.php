<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filters = [
            [
                'name' => "1970s",
                'slug' => "1970s",
                'category' => "type"
            ],
            [
                'name' => "1980s",
                'slug' => "1980s",
                'category' => "type"
            ],
            [
                'name' => "1990s",
                'slug' => "1990s",
                'category' => "type"
            ],
            [
                'name' => "2000s",
                'slug' => "2000s",
                'category' => "type"
            ],
            [
                'name' => "Platform game",
                'slug' => "platform-game",
                'category' => "type"
            ],
            [
                'name' => "RPG",
                'slug' => "rpg",
                'category' => "type"
            ],
            [
                'name' => "Fighting",
                'slug' => "fighting",
                'category' => "type"
            ],
            [
                'name' => "Adventure",
                'slug' => "adventure",
                'category' => "type"
            ],
            [
                'name' => "Sports",
                'slug' => "sports",
                'category' => "type"
            ],
            [
                'name' => "Action",
                'slug' => "action",
                'category' => "type"
            ],
            [
                'name' => "Sandbox",
                'slug' => "sandbox",
                'category' => "type"
            ],
            [
                'name' => "Stealth game",
                'slug' => "stealth-game",
                'category' => "type"
            ],
            [
                'name' => "Educational",
                'slug' => "educational",
                'category' => "type"
            ],
            [
                'name' => "Strategy",
                'slug' => "strategy",
                'category' => "type"
            ],
            [
                'name' => "Battle royale game",
                'slug' => "battle-royale-game",
                'category' => "type"
            ],
            [
                'name' => "MMORPG",
                'slug' => "mmorpg",
                'category' => "type"
            ],
            [
                'name' => "Tactical role-playing game",
                'slug' => "tactical-role-playing-game",
                'category' => "type"
            ],
            [
                'name' => "Massively Multiplayer Online Game (MMO)",
                'slug' => "mmo",
                'category' => "type"
            ],
            [
                'name' => "Survival",
                'slug' => "survival",
                'category' => "type"
            ],
            [
                'name' => "Racing",
                'slug' => "racing",
                'category' => "type"
            ],
            [
                'name' => "Puzzle",
                'slug' => "puzzle",
                'category' => "type"
            ],
            [
                'name' => "Simulation games",
                'slug' => "simulation-games",
                'category' => "type"
            ],
            [
                'name' => "Shooter",
                'slug' => "shooter",
                'category' => "type"
            ],
            [
                'name' => "Horror game",
                'slug' => "horror-game",
                'category' => "type"
            ],
            [
                'name' => "Multiplayer online battle arena (MOBA)",
                'slug' => "moba",
                'category' => "type"
            ]
        ];

        \App\Models\Filter::insert($filters);
    }
}
