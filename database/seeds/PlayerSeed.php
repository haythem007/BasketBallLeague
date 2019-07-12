<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team_id' => 1, 'name' => 'kevin', 'surname' => 'orlando', 'birth_date' => '2019-07-19 23:31:02',],
            ['id' => 2, 'team_id' => 1, 'name' => 'haythem', 'surname' => 'marouani', 'birth_date' => '2019-07-31 23:31:18',],
            ['id' => 3, 'team_id' => 2, 'name' => 'oralndo', 'surname' => 'miranda', 'birth_date' => '2019-07-16 23:31:33',],

        ];

        foreach ($items as $item) {
            \App\Player::create($item);
        }
    }
}
