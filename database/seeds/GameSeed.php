<?php

use Illuminate\Database\Seeder;

class GameSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team1_id' => 1, 'team2_id' => 2, 'start_time' => '2019-08-01 23:35:41', 'result1' => 80, 'result2' => 90,],
            ['id' => 2, 'team1_id' => 2, 'team2_id' => 1, 'start_time' => '2019-07-17 21:37:41', 'result1' => 85, 'result2' => 77,],

        ];

        foreach ($items as $item) {
            \App\Game::create($item);
        }
    }
}
