<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d27b9ae770b0RelationshipsToGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function(Blueprint $table) {
            if (!Schema::hasColumn('games', 'team1_id')) {
                $table->integer('team1_id')->unsigned()->nullable();
                $table->foreign('team1_id', '324397_5d27b9a9e598a')->references('id')->on('teams')->onDelete('cascade');
                }
                if (!Schema::hasColumn('games', 'team2_id')) {
                $table->integer('team2_id')->unsigned()->nullable();
                $table->foreign('team2_id', '324397_5d27b9aa18388')->references('id')->on('teams')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function(Blueprint $table) {
            
        });
    }
}
